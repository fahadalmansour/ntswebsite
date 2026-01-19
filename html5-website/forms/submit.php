<?php
/**
 * NeoTechnology Solutions - Form Handler
 * Sends inquiries to contact@ with CC to advisor@
 */

declare(strict_types=1);

// ====== CONFIG ======
$toEmail      = "contact@neotechnology.solutions";
$ccEmail      = "advisor@neotechnology.solutions";  // CC copy
$fromEmail    = "no-reply@neotechnology.solutions"; // Create this mailbox in cPanel
$siteName     = "NeoTechnology Solutions LLC";

// Redirect URLs
$successEN = "/en/success.html";
$errorEN   = "/en/error.html";
$successAR = "/ar/success.html";
$errorAR   = "/ar/error.html";

// ====== HELPERS ======
function clean_str(string $s): string {
    $s = trim($s);
    $s = str_replace(["\r", "\n"], " ", $s); // prevent header injection
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function redirect_to(string $url): void {
    header("Location: " . $url, true, 302);
    exit;
}

// ====== ONLY POST ======
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    redirect_to($errorEN);
}

// ====== LANGUAGE ROUTING ======
$lang = $_POST["lang"] ?? "en";
$lang = ($lang === "ar") ? "ar" : "en";

// ====== CSRF CHECK ======
session_start();
$token = $_POST["csrf_token"] ?? "";
if (!$token || !isset($_SESSION["csrf_token"]) || !hash_equals($_SESSION["csrf_token"], $token)) {
    redirect_to($lang === "ar" ? $errorAR : $errorEN);
}

// ====== HONEYPOT (spam trap) ======
$hp = $_POST["website"] ?? "";
if (!empty($hp)) {
    // Bots fill hidden fields - silently "succeed" to waste bot time
    redirect_to($lang === "ar" ? $successAR : $successEN);
}

// ====== RATE LIMITING (basic) ======
$ip = $_SERVER["REMOTE_ADDR"] ?? "unknown";
$rateLimitFile = sys_get_temp_dir() . "/neotech_form_" . md5($ip);
if (file_exists($rateLimitFile)) {
    $lastSubmit = (int) file_get_contents($rateLimitFile);
    if (time() - $lastSubmit < 60) { // 1 minute cooldown
        redirect_to($lang === "ar" ? $errorAR : $errorEN);
    }
}
file_put_contents($rateLimitFile, time());

// ====== INPUTS ======
$company   = clean_str($_POST["company"] ?? "");
$name      = clean_str($_POST["name"] ?? "");
$title     = clean_str($_POST["title"] ?? "");
$email     = clean_str($_POST["email"] ?? "");
$phone     = clean_str($_POST["phone"] ?? "");
$industry  = clean_str($_POST["industry"] ?? "");
$decision  = clean_str($_POST["decision_type"] ?? "");
$timeline  = clean_str($_POST["timeline"] ?? "");
$situation = clean_str($_POST["situation"] ?? "");
$vendors   = clean_str($_POST["vendors"] ?? "");
$budget    = clean_str($_POST["budget"] ?? "");
$link      = clean_str($_POST["link"] ?? "");
$introReq  = clean_str($_POST["intro_request"] ?? "");
$message   = trim($_POST["message"] ?? "");
$consent   = $_POST["consent"] ?? "";

// ====== VALIDATION ======
$errors = [];

if ($company === "") $errors[] = "Company required";
if ($name === "") $errors[] = "Name required";
if ($email === "") $errors[] = "Email required";
if ($industry === "") $errors[] = "Industry required";
if ($decision === "") $errors[] = "Decision type required";
if ($timeline === "") $errors[] = "Timeline required";
if ($situation === "") $errors[] = "Situation required";
if ($message === "") $errors[] = "Message required";
if ($consent !== "yes") $errors[] = "Consent required";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
}

if (!empty($errors)) {
    redirect_to($lang === "ar" ? $errorAR : $errorEN);
}

// ====== BUILD EMAIL ======
$subject = "[Lead] {$siteName} - {$company} ({$decision})";

$bodyLines = [
    "═══════════════════════════════════════════════════════════",
    "     NEW CONSULTATION REQUEST - NeoTechnology Solutions",
    "═══════════════════════════════════════════════════════════",
    "",
    "CONTACT INFORMATION",
    "───────────────────────────────────────────────────────────",
    "Company:    {$company}",
    "Name:       {$name}",
    "Title:      {$title}",
    "Email:      {$email}",
    "Phone:      {$phone}",
    "",
    "REQUEST DETAILS",
    "───────────────────────────────────────────────────────────",
    "Industry:        {$industry}",
    "Decision Type:   {$decision}",
    "Timeline:        {$timeline}",
    "Situation:       {$situation}",
    "Vendors:         {$vendors}",
    "Budget:          {$budget}",
    "Link/Proposal:   {$link}",
    "Intro Request:   " . ($introReq ?: "Not specified"),
    "",
    "MESSAGE",
    "───────────────────────────────────────────────────────────",
    wordwrap($message, 70),
    "",
    "METADATA",
    "───────────────────────────────────────────────────────────",
    "Consent:     Advisory-only acknowledged",
    "Language:    " . strtoupper($lang),
    "Submitted:   " . date("Y-m-d H:i:s T"),
    "IP Address:  {$ip}",
    "User Agent:  " . ($_SERVER["HTTP_USER_AGENT"] ?? ""),
    "",
    "═══════════════════════════════════════════════════════════",
];

$body = implode("\n", $bodyLines);

// ====== HEADERS ======
// From must be your domain to avoid spam filters
$headers = [];
$headers[] = "From: {$siteName} <{$fromEmail}>";
$headers[] = "Reply-To: {$name} <{$email}>";
$headers[] = "Cc: {$ccEmail}";  // CC to advisor@
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: text/plain; charset=UTF-8";
$headers[] = "X-Mailer: NeoTechnology-Form/1.0";

// ====== SEND EMAIL ======
$ok = @mail($toEmail, $subject, $body, implode("\r\n", $headers));

// ====== LOG (optional - for debugging) ======
$logFile = __DIR__ . "/submissions.log";
$logEntry = date("Y-m-d H:i:s") . " | {$ip} | {$company} | {$email} | " . ($ok ? "SENT" : "FAILED") . "\n";
@file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

// ====== REDIRECT ======
if ($ok) {
    redirect_to($lang === "ar" ? $successAR : $successEN);
}
redirect_to($lang === "ar" ? $errorAR : $errorEN);
