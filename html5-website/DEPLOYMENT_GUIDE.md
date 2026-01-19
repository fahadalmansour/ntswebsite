# NeoTechnology Solutions Website - cPanel Deployment Guide

## Overview

This guide covers deploying the static HTML5 website with PHP form handling to a cPanel hosting environment.

## Pre-Deployment Checklist

### Email Mailboxes Required

Create these mailboxes in cPanel **before** uploading the site:

| Mailbox | Purpose |
|---------|---------|
| `contact@neotechnology.solutions` | Primary inbox for form submissions |
| `advisor@neotechnology.solutions` | CC copy of all inquiries |
| `no-reply@neotechnology.solutions` | Sender address (prevents spam filter issues) |
| `privacy@neotechnology.solutions` | Privacy inquiries |
| `info@neotechnology.solutions` | General inquiries (optional) |

**To create mailboxes in cPanel:**
1. Log in to cPanel
2. Go to **Email** → **Email Accounts**
3. Click **Create** for each mailbox
4. Set strong passwords and note them down

### Email Forwarders (Optional)

If you want emails to go to a personal inbox:
1. Go to **Email** → **Forwarders**
2. Create forwarders from `contact@` and `advisor@` to your personal email

---

## File Structure

Upload the following structure to `public_html/`:

```
public_html/
├── index.html              # Language selector (root)
├── en/
│   ├── index.html          # English homepage
│   ├── services.html
│   ├── how-we-work.html
│   ├── about.html
│   ├── case-studies.html
│   ├── contact.php         # PHP form (with CSRF)
│   ├── success.html        # Form success page
│   ├── error.html          # Form error page
│   ├── privacy.html
│   ├── cookies.html
│   ├── terms.html
│   ├── disclaimer.html
│   └── disclosure.html
├── ar/
│   ├── index.html          # Arabic homepage
│   ├── services.html
│   ├── how-we-work.html
│   ├── about.html
│   ├── case-studies.html
│   ├── contact.php         # PHP form (with CSRF)
│   ├── success.html        # Form success page
│   ├── error.html          # Form error page
│   ├── privacy.html
│   ├── cookies.html
│   ├── terms.html
│   ├── disclaimer.html
│   └── disclosure.html
├── assets/
│   ├── css/
│   │   └── style.css       # Main stylesheet
│   ├── js/
│   │   └── main.js         # JavaScript
│   ├── images/             # Images (favicon, OG images)
│   └── brand/              # Branding assets
└── forms/
    └── submit.php          # PHP form handler
```

---

## Upload Instructions

### Option A: File Manager (Simple)

1. Log in to cPanel
2. Go to **Files** → **File Manager**
3. Navigate to `public_html/`
4. Upload the `html5-website/` folder contents directly
5. Ensure folder structure matches above

### Option B: FTP (Recommended for Larger Uploads)

1. Create FTP account in cPanel → **Files** → **FTP Accounts**
2. Use FTP client (FileZilla, Cyberduck)
3. Connect with credentials
4. Upload to `public_html/`

### Option C: Git Deployment (Advanced)

1. Set up Git repository
2. Use cPanel → **Files** → **Git Version Control**
3. Clone and deploy

---

## Post-Upload Configuration

### 1. PHP Version Check

Ensure PHP 7.4+ is enabled:
1. Go to **Software** → **Select PHP Version**
2. Select PHP 7.4 or 8.0+
3. Ensure these extensions are enabled:
   - `session`
   - `mbstring`
   - `filter`

### 2. File Permissions

Set correct permissions:
```
/forms/submit.php       → 644
/forms/submissions.log  → 644 (auto-created, needs write access)
All .html files         → 644
All .php files          → 644
Folders                 → 755
```

In cPanel File Manager, right-click files → **Change Permissions**.

### 3. Test Form Submission

1. Visit: `https://neotechnology.solutions/en/contact.php`
2. Fill out test submission
3. Verify:
   - Email arrives at `contact@`
   - CC copy arrives at `advisor@`
   - Redirect to `success.html` works
   - Log entry created in `/forms/submissions.log`

### 4. Spam Protection (Optional)

Consider adding:
- **reCAPTCHA**: Add Google reCAPTCHA v3 for extra spam protection
- **Honeypot** is already implemented in the form

---

## URL Rewriting (.htaccess)

Create or edit `.htaccess` in `public_html/`:

```apache
# Force HTTPS
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Remove .html extension (optional)
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}.html -f
RewriteRule ^(.*)$ $1.html [L]

# Security headers
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-XSS-Protection "1; mode=block"
    Header set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>

# Protect log file
<Files "submissions.log">
    Order allow,deny
    Deny from all
</Files>

# Compress files
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/css text/javascript application/javascript
</IfModule>

# Cache static assets
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType image/svg+xml "access plus 1 month"
    ExpiresByType image/png "access plus 1 month"
    ExpiresByType image/jpeg "access plus 1 month"
</IfModule>
```

---

## SSL Certificate

If not already configured:

1. Go to **Security** → **SSL/TLS Status**
2. Enable **AutoSSL** for `neotechnology.solutions`
3. Wait 5-10 minutes for certificate issuance
4. Verify HTTPS works

---

## Form Handler Configuration

The form handler (`/forms/submit.php`) is configured to:

| Setting | Value |
|---------|-------|
| **To Email** | `contact@neotechnology.solutions` |
| **CC Email** | `advisor@neotechnology.solutions` |
| **From Email** | `no-reply@neotechnology.solutions` |
| **CSRF Protection** | Enabled (session-based) |
| **Honeypot** | Hidden "website" field |
| **Rate Limiting** | 1 submission per minute per IP |
| **Logging** | `/forms/submissions.log` |

### Customization

Edit `/forms/submit.php` to change:
```php
$toEmail   = "contact@neotechnology.solutions";  // Change recipient
$ccEmail   = "advisor@neotechnology.solutions";  // Change CC
$fromEmail = "no-reply@neotechnology.solutions"; // Change sender
```

---

## Testing Checklist

### Functionality Tests

- [ ] Root `/` redirects to language selector
- [ ] `/en/index.html` loads correctly
- [ ] `/ar/index.html` loads correctly (RTL)
- [ ] Navigation works on all pages
- [ ] Mobile menu toggle works
- [ ] Language switcher works
- [ ] Contact form submission works
- [ ] Success page displays after submission
- [ ] Error page displays on validation failure
- [ ] Emails received at correct addresses
- [ ] Cookie consent banner appears
- [ ] All legal pages accessible

### Cross-Browser Tests

- [ ] Chrome (Desktop + Mobile)
- [ ] Safari (Desktop + iOS)
- [ ] Firefox
- [ ] Edge

### Performance Tests

- [ ] Page load time < 3 seconds
- [ ] Images optimized
- [ ] CSS/JS compressed

---

## Troubleshooting

### Form Not Sending Emails

1. **Check mail function**: PHP `mail()` must be enabled
2. **Check sender domain**: `no-reply@` mailbox must exist
3. **Check spam folder**: First emails often land in spam
4. **Check error log**: cPanel → **Metrics** → **Errors**

### CSRF Token Errors

1. Ensure PHP sessions are enabled
2. Clear browser cookies and try again
3. Check session save path has write permissions

### 500 Internal Server Error

1. Check `.htaccess` syntax
2. Check PHP error log
3. Verify file permissions (644 for files, 755 for folders)

### Arabic Pages Not Displaying Correctly

1. Ensure `dir="rtl"` is on `<html>` tag
2. Verify UTF-8 encoding in browser
3. Check Tajawal font is loading from Google Fonts

---

## Maintenance

### Regular Tasks

- **Weekly**: Check `/forms/submissions.log` for entries
- **Monthly**: Review email deliverability
- **Quarterly**: Update copyright year if needed
- **As needed**: Update content, add case studies

### Backup

Set up automated backups in cPanel:
1. Go to **Files** → **Backup Wizard**
2. Schedule full backup weekly
3. Store off-site (Dropbox, Google Drive)

---

## Support

For technical issues with the website:
- Review this guide first
- Check cPanel error logs
- Contact hosting provider for server-side issues

---

**Document Version**: 1.0
**Last Updated**: January 2026
**Website**: neotechnology.solutions
