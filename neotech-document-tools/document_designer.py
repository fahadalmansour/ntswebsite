#!/usr/bin/env python3
"""
╔══════════════════════════════════════════════════════════════════╗
║           NeoTechnology Solutions - Document Designer            ║
║                      🤖 AI-Powered Edition                       ║
║                                                                  ║
║  Create professional proposals, contracts, and emails easily     ║
║  Author: NeoTechnology Solutions LLC                             ║
║  Version: 2.0.0                                                  ║
╚══════════════════════════════════════════════════════════════════╝

Usage:
    python document_designer.py

Requirements:
    pip install reportlab jinja2 anthropic

Features:
    - Create Proposals (PDF) with AI-generated content
    - Create Contracts (PDF)
    - Create Email Templates (HTML) with AI writing
    - AI-powered scope and deliverable suggestions
    - Smart pricing recommendations
    - Print-ready output
    - Bilingual support (EN/AR)
"""

import os
import sys
import json
from datetime import datetime, timedelta
from pathlib import Path

# Check for required packages
try:
    from reportlab.lib import colors
    from reportlab.lib.pagesizes import A4, letter
    from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
    from reportlab.lib.units import inch, mm, cm
    from reportlab.platypus import (
        SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle,
        Image, PageBreak, HRFlowable, ListFlowable, ListItem
    )
    from reportlab.lib.enums import TA_CENTER, TA_RIGHT, TA_LEFT, TA_JUSTIFY
    from reportlab.pdfbase import pdfmetrics
    from reportlab.pdfbase.ttfonts import TTFont
    REPORTLAB_OK = True
except ImportError:
    REPORTLAB_OK = False
    print("⚠️  reportlab not installed. Run: pip install reportlab")

try:
    from jinja2 import Template
    JINJA2_OK = True
except ImportError:
    JINJA2_OK = False
    print("⚠️  jinja2 not installed. Run: pip install jinja2")

try:
    import anthropic
    ANTHROPIC_OK = True
except ImportError:
    ANTHROPIC_OK = False
    print("⚠️  anthropic not installed. Run: pip install anthropic")


# ============================================
# Company Configuration
# ============================================

COMPANY = {
    "name": "NeoTechnology Solutions LLC",
    "name_ar": "نيوتكنولوجي سولوشنز",
    "email": "info@neotechnology.solutions",
    "phone": "+1 (307) 507-3999",
    "website": "https://neotechnology.solutions",
    "address": "1021 E Lincolnway, Suite 8983",
    "city": "Cheyenne",
    "state": "WY",
    "zip": "82001",
    "country": "USA",
    "tagline": "Professional IT Consulting",
    "tagline_ar": "استشارات تقنية المعلومات الاحترافية",
}

# Color scheme
COLORS = {
    "primary": colors.HexColor("#0f172a"),      # slate-900
    "secondary": colors.HexColor("#64748b"),    # slate-500
    "accent": colors.HexColor("#3b82f6"),       # blue-500
    "light": colors.HexColor("#f8fafc"),        # slate-50
    "border": colors.HexColor("#e2e8f0"),       # slate-200
    "text": colors.HexColor("#334155"),         # slate-700
    "white": colors.white,
    "black": colors.black,
}


# ============================================
# AI Assistant
# ============================================

class AIAssistant:
    """AI-powered content generation using Claude."""

    def __init__(self):
        self.client = None
        self.enabled = False
        self._init_client()

    def _init_client(self):
        """Initialize the Anthropic client."""
        if not ANTHROPIC_OK:
            return

        api_key = os.environ.get("ANTHROPIC_API_KEY")
        if not api_key:
            # Try to read from .env file
            env_file = Path(__file__).parent / ".env"
            if env_file.exists():
                with open(env_file) as f:
                    for line in f:
                        if line.startswith("ANTHROPIC_API_KEY="):
                            api_key = line.split("=", 1)[1].strip().strip('"\'')
                            break

        if api_key:
            try:
                self.client = anthropic.Anthropic(api_key=api_key)
                self.enabled = True
            except Exception as e:
                print(f"⚠️  AI initialization failed: {e}")

    def _call_claude(self, prompt: str, max_tokens: int = 1024) -> str:
        """Call Claude API with error handling."""
        if not self.enabled:
            return None

        try:
            message = self.client.messages.create(
                model="claude-sonnet-4-20250514",
                max_tokens=max_tokens,
                messages=[
                    {"role": "user", "content": prompt}
                ]
            )
            return message.content[0].text
        except Exception as e:
            print(f"⚠️  AI request failed: {e}")
            return None

    def generate_proposal_content(self, project_type: str, client_industry: str,
                                   budget_range: str = None) -> dict:
        """Generate proposal content including scope, deliverables, and description."""

        prompt = f"""You are a professional IT consultant at NeoTechnology Solutions.
Generate proposal content for an IT consulting project.

Project Type: {project_type}
Client Industry: {client_industry}
Budget Range: {budget_range or "Not specified"}

Respond in JSON format with these fields:
{{
    "project_description": "2-3 sentence professional description",
    "scope": ["5-7 scope items as bullet points"],
    "deliverables": ["4-6 concrete deliverables"],
    "timeline_weeks": number (estimate based on scope),
    "suggested_line_items": [
        {{"description": "Phase/item name", "amount": number}}
    ]
}}

Be professional, specific, and realistic. Focus on IT consulting deliverables like assessments, strategies, roadmaps, and recommendations (not implementation).
"""

        response = self._call_claude(prompt)
        if not response:
            return None

        try:
            # Extract JSON from response
            json_start = response.find("{")
            json_end = response.rfind("}") + 1
            if json_start >= 0 and json_end > json_start:
                return json.loads(response[json_start:json_end])
        except json.JSONDecodeError:
            pass

        return None

    def generate_email_content(self, email_type: str, recipient_name: str,
                                context: str = "", language: str = "en") -> dict:
        """Generate professional email content."""

        lang_instruction = "Write in Arabic" if language == "ar" else "Write in English"

        prompt = f"""You are writing a professional email for NeoTechnology Solutions (IT Consulting).

Email Type: {email_type}
Recipient: {recipient_name}
Additional Context: {context or "None"}

{lang_instruction}

Respond in JSON format:
{{
    "subject": "Email subject line",
    "title": "Main heading in email body",
    "content": "HTML formatted email body with <p> tags, <ul>/<ol> lists if needed. Keep professional and concise."
}}

Be professional, warm but not overly casual. Focus on clear communication.
"""

        response = self._call_claude(prompt)
        if not response:
            return None

        try:
            json_start = response.find("{")
            json_end = response.rfind("}") + 1
            if json_start >= 0 and json_end > json_start:
                return json.loads(response[json_start:json_end])
        except json.JSONDecodeError:
            pass

        return None

    def improve_text(self, text: str, style: str = "professional") -> str:
        """Improve and polish text."""

        prompt = f"""Improve this text to be more {style}. Keep the same meaning but make it clearer and more polished.

Original text:
{text}

Respond with only the improved text, no explanations."""

        return self._call_claude(prompt, max_tokens=500)

    def suggest_pricing(self, project_type: str, scope_items: list,
                        timeline_weeks: int) -> list:
        """Suggest pricing breakdown based on project details."""

        prompt = f"""As an IT consultant, suggest a realistic pricing breakdown for this project.

Project Type: {project_type}
Scope Items: {', '.join(scope_items)}
Timeline: {timeline_weeks} weeks

Provide pricing in JSON format (USD):
{{
    "line_items": [
        {{"description": "Phase/deliverable name", "amount": number}},
        ...
    ],
    "rationale": "Brief explanation of pricing"
}}

Use realistic consulting rates ($150-300/hour equivalent). Total should be reasonable for the scope.
"""

        response = self._call_claude(prompt)
        if not response:
            return None

        try:
            json_start = response.find("{")
            json_end = response.rfind("}") + 1
            if json_start >= 0 and json_end > json_start:
                data = json.loads(response[json_start:json_end])
                return data.get("line_items", [])
        except json.JSONDecodeError:
            pass

        return None


# Global AI assistant instance
ai_assistant = AIAssistant()


# ============================================
# PDF Document Generator
# ============================================

class DocumentGenerator:
    """Generate professional PDF documents."""

    def __init__(self, output_dir="./output"):
        self.output_dir = Path(output_dir)
        self.output_dir.mkdir(parents=True, exist_ok=True)
        self.styles = getSampleStyleSheet()
        self._setup_styles()

    def _setup_styles(self):
        """Setup custom styles."""
        # Title
        self.styles.add(ParagraphStyle(
            name='DocTitle',
            fontSize=28,
            leading=34,
            fontName='Helvetica-Bold',
            textColor=COLORS["primary"],
            spaceAfter=20,
        ))

        # Subtitle
        self.styles.add(ParagraphStyle(
            name='DocSubtitle',
            fontSize=14,
            leading=18,
            fontName='Helvetica',
            textColor=COLORS["secondary"],
            spaceAfter=30,
        ))

        # Section Title
        self.styles.add(ParagraphStyle(
            name='SectionTitle',
            fontSize=14,
            leading=18,
            fontName='Helvetica-Bold',
            textColor=COLORS["primary"],
            spaceBefore=25,
            spaceAfter=12,
            borderWidth=0,
            borderPadding=0,
            borderColor=COLORS["border"],
        ))

        # Body Text (use existing or override)
        if 'DocBody' not in [s.name for s in self.styles.byName.values()]:
            self.styles.add(ParagraphStyle(
                name='DocBody',
                fontSize=10,
                leading=15,
                fontName='Helvetica',
                textColor=COLORS["text"],
                spaceAfter=10,
                alignment=TA_JUSTIFY,
            ))

        # Small Text
        self.styles.add(ParagraphStyle(
            name='SmallText',
            fontSize=9,
            leading=12,
            fontName='Helvetica',
            textColor=COLORS["secondary"],
        ))

        # List Item
        self.styles.add(ParagraphStyle(
            name='ListItem',
            fontSize=10,
            leading=15,
            fontName='Helvetica',
            textColor=COLORS["text"],
            leftIndent=20,
            spaceAfter=5,
        ))

    def _header_footer(self, canvas, doc):
        """Draw header and footer on each page."""
        canvas.saveState()

        # Header
        canvas.setFont('Helvetica-Bold', 14)
        canvas.setFillColor(COLORS["primary"])
        canvas.drawString(50, A4[1] - 40, COMPANY["name"])

        canvas.setFont('Helvetica', 9)
        canvas.setFillColor(COLORS["secondary"])
        canvas.drawString(50, A4[1] - 55, COMPANY["tagline"])

        # Header right side
        canvas.drawRightString(A4[0] - 50, A4[1] - 40, COMPANY["email"])
        canvas.drawRightString(A4[0] - 50, A4[1] - 52, COMPANY["phone"])

        # Header line
        canvas.setStrokeColor(COLORS["border"])
        canvas.setLineWidth(1)
        canvas.line(50, A4[1] - 65, A4[0] - 50, A4[1] - 65)

        # Footer
        canvas.setStrokeColor(COLORS["border"])
        canvas.line(50, 50, A4[0] - 50, 50)

        canvas.setFont('Helvetica', 8)
        canvas.setFillColor(COLORS["secondary"])
        canvas.drawCentredString(A4[0] / 2, 35, f"Page {doc.page}")
        canvas.drawString(50, 35, f"{COMPANY['address']}, {COMPANY['city']}, {COMPANY['state']} {COMPANY['zip']}")

        canvas.restoreState()

    def create_proposal(self, data: dict) -> str:
        """
        Create a proposal PDF.

        data = {
            "client_name": "John Doe",
            "client_company": "Acme Corp",
            "client_email": "john@acme.com",
            "project_title": "Cloud Migration",
            "project_description": "...",
            "scope": ["item1", "item2"],
            "deliverables": ["item1", "item2"],
            "timeline_weeks": 4,
            "line_items": [{"description": "...", "amount": 1000}],
            "discount": 0,
            "terms": ["term1", "term2"],
            "valid_days": 30,
        }
        """
        # Generate proposal number
        now = datetime.now()
        proposal_num = f"NTS-{now.year}{now.month:02d}-{now.strftime('%H%M%S')}"
        valid_until = (now + timedelta(days=data.get("valid_days", 30))).strftime("%B %d, %Y")

        filename = f"proposal_{proposal_num}.pdf"
        filepath = self.output_dir / filename

        doc = SimpleDocTemplate(
            str(filepath),
            pagesize=A4,
            rightMargin=50,
            leftMargin=50,
            topMargin=80,
            bottomMargin=70,
        )

        story = []

        # Title
        story.append(Paragraph("Consulting Proposal", self.styles['DocTitle']))
        story.append(Paragraph(data.get("project_title", "IT Consulting Services"), self.styles['DocSubtitle']))

        # Meta info
        meta_data = [
            [f"Proposal #: {proposal_num}", f"Date: {now.strftime('%B %d, %Y')}"],
            [f"Valid Until: {valid_until}", ""],
        ]
        meta_table = Table(meta_data, colWidths=[250, 250])
        meta_table.setStyle(TableStyle([
            ('FONTSIZE', (0, 0), (-1, -1), 9),
            ('TEXTCOLOR', (0, 0), (-1, -1), COLORS["secondary"]),
        ]))
        story.append(meta_table)
        story.append(Spacer(1, 20))

        # Client Info
        story.append(Paragraph("Prepared For", self.styles['SectionTitle']))
        client_info = f"""
        <b>{data.get('client_company', '[Company Name]')}</b><br/>
        {data.get('client_name', '[Contact Name]')}<br/>
        {data.get('client_email', '[email@company.com]')}
        """
        story.append(Paragraph(client_info, self.styles['DocBody']))
        story.append(Spacer(1, 15))

        # Project Overview
        story.append(Paragraph("Project Overview", self.styles['SectionTitle']))
        story.append(Paragraph(data.get("project_description", "[Project description goes here]"), self.styles['DocBody']))
        story.append(Spacer(1, 10))

        # Scope
        scope = data.get("scope", [])
        if scope:
            story.append(Paragraph("Scope of Work", self.styles['SectionTitle']))
            for item in scope:
                story.append(Paragraph(f"• {item}", self.styles['ListItem']))
            story.append(Spacer(1, 10))

        # Deliverables
        deliverables = data.get("deliverables", [])
        if deliverables:
            story.append(Paragraph("Deliverables", self.styles['SectionTitle']))
            for i, item in enumerate(deliverables, 1):
                story.append(Paragraph(f"{i}. {item}", self.styles['ListItem']))
            story.append(Spacer(1, 10))

        # Timeline
        timeline = data.get("timeline_weeks", 4)
        story.append(Paragraph("Timeline", self.styles['SectionTitle']))
        story.append(Paragraph(f"Estimated Duration: <b>{timeline} weeks</b> from project kickoff", self.styles['DocBody']))
        story.append(Spacer(1, 15))

        # Pricing
        story.append(Paragraph("Investment", self.styles['SectionTitle']))

        # Calculate totals
        line_items = data.get("line_items", [])
        subtotal = sum(item.get("amount", 0) for item in line_items)
        discount = data.get("discount", 0)
        total = subtotal - discount

        # Pricing table
        pricing_data = [["Description", "Amount (USD)"]]
        for item in line_items:
            pricing_data.append([item.get("description", ""), f"${item.get('amount', 0):,.2f}"])

        pricing_data.append(["Subtotal", f"${subtotal:,.2f}"])
        if discount > 0:
            pricing_data.append(["Discount", f"-${discount:,.2f}"])
        pricing_data.append(["Total Investment", f"${total:,.2f}"])

        pricing_table = Table(pricing_data, colWidths=[350, 150])
        pricing_table.setStyle(TableStyle([
            ('FONTNAME', (0, 0), (-1, 0), 'Helvetica-Bold'),
            ('BACKGROUND', (0, 0), (-1, 0), COLORS["light"]),
            ('FONTSIZE', (0, 0), (-1, -1), 10),
            ('BOTTOMPADDING', (0, 0), (-1, -1), 10),
            ('TOPPADDING', (0, 0), (-1, -1), 10),
            ('LINEBELOW', (0, 0), (-1, -2), 0.5, COLORS["border"]),
            ('ALIGN', (1, 0), (1, -1), 'RIGHT'),
            ('FONTNAME', (0, -1), (-1, -1), 'Helvetica-Bold'),
            ('BACKGROUND', (0, -1), (-1, -1), COLORS["primary"]),
            ('TEXTCOLOR', (0, -1), (-1, -1), COLORS["white"]),
        ]))
        story.append(pricing_table)
        story.append(Spacer(1, 20))

        # Terms
        terms = data.get("terms", [
            "50% payment due upon project initiation",
            "Remaining 50% due upon delivery of final deliverables",
            "This proposal is valid for 30 days from the date above",
        ])
        story.append(Paragraph("Terms & Conditions", self.styles['SectionTitle']))
        for i, term in enumerate(terms, 1):
            story.append(Paragraph(f"{i}. {term}", self.styles['ListItem']))

        # Build PDF
        doc.build(story, onFirstPage=self._header_footer, onLaterPages=self._header_footer)

        return str(filepath)

    def create_contract(self, data: dict) -> str:
        """
        Create a contract PDF.

        data = {
            "client_name": "John Doe",
            "client_company": "Acme Corp",
            "client_address": "123 Main St, City, State 12345",
            "client_email": "john@acme.com",
            "project_title": "Cloud Migration",
            "services": ["service1", "service2"],
            "deliverables": [{"name": "...", "description": "...", "due": "..."}],
            "total_fee": 10000,
            "payment_schedule": [{"milestone": "...", "percentage": 50, "amount": 5000}],
        }
        """
        now = datetime.now()
        contract_num = f"CSA-{now.year}-{now.strftime('%m%d%H%M')}"

        filename = f"contract_{contract_num}.pdf"
        filepath = self.output_dir / filename

        doc = SimpleDocTemplate(
            str(filepath),
            pagesize=A4,
            rightMargin=50,
            leftMargin=50,
            topMargin=80,
            bottomMargin=70,
        )

        story = []

        # Title
        story.append(Paragraph("CONSULTING SERVICES AGREEMENT", self.styles['DocTitle']))
        story.append(Spacer(1, 10))

        # Contract meta
        meta_text = f"""
        <b>Agreement Number:</b> {contract_num}<br/>
        <b>Effective Date:</b> {now.strftime('%B %d, %Y')}<br/>
        <b>Governing Law:</b> State of Wyoming, USA
        """
        story.append(Paragraph(meta_text, self.styles['SmallText']))
        story.append(Spacer(1, 25))

        # Parties
        story.append(Paragraph("PARTIES", self.styles['SectionTitle']))

        parties_text = f"""
        <b>THE CONSULTANT:</b><br/>
        {COMPANY['name']}<br/>
        {COMPANY['address']}<br/>
        {COMPANY['city']}, {COMPANY['state']} {COMPANY['zip']}, {COMPANY['country']}<br/>
        Email: {COMPANY['email']}<br/><br/>

        <b>THE CLIENT:</b><br/>
        {data.get('client_company', '[Client Company]')}<br/>
        {data.get('client_address', '[Client Address]')}<br/>
        Contact: {data.get('client_name', '[Client Name]')}<br/>
        Email: {data.get('client_email', '[client@email.com]')}
        """
        story.append(Paragraph(parties_text, self.styles['DocBody']))
        story.append(Spacer(1, 15))

        # Recitals
        story.append(Paragraph("RECITALS", self.styles['SectionTitle']))
        recitals = """
        WHEREAS, the Consultant is engaged in the business of providing information technology
        consulting services; and<br/><br/>
        WHEREAS, the Client desires to engage the Consultant to provide certain consulting
        services as described herein;<br/><br/>
        NOW, THEREFORE, in consideration of the mutual covenants herein, the parties agree as follows:
        """
        story.append(Paragraph(recitals, self.styles['DocBody']))
        story.append(Spacer(1, 15))

        # Article 1: Services
        story.append(Paragraph("1. SCOPE OF SERVICES", self.styles['SectionTitle']))
        story.append(Paragraph(
            "1.1 The Consultant agrees to provide the consulting services as outlined in Schedule A attached hereto.",
            self.styles['DocBody']
        ))
        story.append(Paragraph(
            "1.2 Any additional services not described shall be agreed upon in writing and may be subject to additional fees.",
            self.styles['DocBody']
        ))
        story.append(Spacer(1, 10))

        # Article 2: Term
        story.append(Paragraph("2. TERM AND TERMINATION", self.styles['SectionTitle']))
        story.append(Paragraph(
            "2.1 This Agreement shall commence on the Effective Date and continue until completion of Services.",
            self.styles['DocBody']
        ))
        story.append(Paragraph(
            "2.2 Either party may terminate with 30 days' written notice.",
            self.styles['DocBody']
        ))
        story.append(Spacer(1, 10))

        # Article 3: Fees
        story.append(Paragraph("3. FEES AND PAYMENT", self.styles['SectionTitle']))
        total_fee = data.get("total_fee", 0)
        story.append(Paragraph(
            f"3.1 The Client agrees to pay the Consultant a total fee of <b>${total_fee:,.2f} USD</b> as outlined in Schedule B.",
            self.styles['DocBody']
        ))
        story.append(Paragraph(
            "3.2 All invoices are payable within 15 days of receipt. Late payments accrue 1.5% interest per month.",
            self.styles['DocBody']
        ))
        story.append(Spacer(1, 10))

        # Article 4: Confidentiality
        story.append(Paragraph("4. CONFIDENTIALITY", self.styles['SectionTitle']))
        story.append(Paragraph(
            "4.1 Each party agrees to maintain in confidence all information received from the other party designated as confidential.",
            self.styles['DocBody']
        ))
        story.append(Paragraph(
            "4.2 This confidentiality obligation survives termination for three (3) years.",
            self.styles['DocBody']
        ))
        story.append(Spacer(1, 10))

        # Article 5: IP
        story.append(Paragraph("5. INTELLECTUAL PROPERTY", self.styles['SectionTitle']))
        story.append(Paragraph(
            "5.1 Upon full payment, the Client owns all deliverables specifically created under this Agreement.",
            self.styles['DocBody']
        ))
        story.append(Paragraph(
            "5.2 The Consultant retains ownership of pre-existing materials, methodologies, and tools.",
            self.styles['DocBody']
        ))
        story.append(Spacer(1, 10))

        # Article 6: Limitation
        story.append(Paragraph("6. LIMITATION OF LIABILITY", self.styles['SectionTitle']))
        story.append(Paragraph(
            "6.1 The Consultant's total liability shall not exceed the total fees paid under this Agreement.",
            self.styles['DocBody']
        ))
        story.append(Paragraph(
            "6.2 Neither party shall be liable for indirect, incidental, or consequential damages.",
            self.styles['DocBody']
        ))
        story.append(Spacer(1, 10))

        # Article 7: General
        story.append(Paragraph("7. GENERAL PROVISIONS", self.styles['SectionTitle']))
        story.append(Paragraph(
            "7.1 This Agreement constitutes the entire agreement between the parties.",
            self.styles['DocBody']
        ))
        story.append(Paragraph(
            "7.2 This Agreement may only be amended in writing signed by both parties.",
            self.styles['DocBody']
        ))
        story.append(Paragraph(
            "7.3 The Consultant is an independent contractor, not an employee.",
            self.styles['DocBody']
        ))

        # Signatures
        story.append(PageBreak())
        story.append(Paragraph("SIGNATURES", self.styles['SectionTitle']))
        story.append(Paragraph(
            "IN WITNESS WHEREOF, the parties have executed this Agreement as of the Effective Date.",
            self.styles['DocBody']
        ))
        story.append(Spacer(1, 30))

        sig_data = [
            ["FOR THE CONSULTANT", "FOR THE CLIENT"],
            [f"{COMPANY['name']}", f"{data.get('client_company', '[Client Company]')}"],
            ["", ""],
            ["_" * 35, "_" * 35],
            ["Signature", "Signature"],
            ["", ""],
            ["_" * 35, "_" * 35],
            ["Name", "Name"],
            ["", ""],
            ["_" * 35, "_" * 35],
            ["Date", "Date"],
        ]

        sig_table = Table(sig_data, colWidths=[250, 250])
        sig_table.setStyle(TableStyle([
            ('FONTNAME', (0, 0), (-1, 0), 'Helvetica-Bold'),
            ('FONTSIZE', (0, 0), (-1, -1), 10),
            ('TOPPADDING', (0, 0), (-1, -1), 8),
            ('BOTTOMPADDING', (0, 0), (-1, -1), 8),
            ('ALIGN', (0, 0), (-1, -1), 'LEFT'),
            ('FONTNAME', (0, 1), (-1, 1), 'Helvetica'),
            ('TEXTCOLOR', (0, 4), (-1, 4), COLORS["secondary"]),
            ('TEXTCOLOR', (0, 7), (-1, 7), COLORS["secondary"]),
            ('TEXTCOLOR', (0, 10), (-1, 10), COLORS["secondary"]),
            ('FONTSIZE', (0, 4), (-1, 4), 8),
            ('FONTSIZE', (0, 7), (-1, 7), 8),
            ('FONTSIZE', (0, 10), (-1, 10), 8),
        ]))
        story.append(sig_table)

        # Build PDF
        doc.build(story, onFirstPage=self._header_footer, onLaterPages=self._header_footer)

        return str(filepath)


# ============================================
# Email Template Generator
# ============================================

EMAIL_TEMPLATE = """
<!DOCTYPE html>
<html lang="{{ lang }}" dir="{{ 'rtl' if lang == 'ar' else 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ subject }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f8fafc;
            font-family: {{ "'Tajawal', " if lang == 'ar' else '' }}-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
        }
        .header {
            background-color: #0f172a;
            padding: 30px 40px;
            text-align: center;
        }
        .header h1 {
            color: white;
            font-size: 22px;
            margin: 0 0 5px 0;
        }
        .header p {
            color: #94a3b8;
            font-size: 13px;
            margin: 0;
        }
        .body {
            padding: 40px;
        }
        .body h2 {
            color: #0f172a;
            font-size: 24px;
            margin: 0 0 20px 0;
        }
        .body p {
            color: #475569;
            font-size: 15px;
            line-height: 1.7;
            margin: 0 0 15px 0;
        }
        .body ul, .body ol {
            color: #475569;
            padding-{{ 'right' if lang == 'ar' else 'left' }}: 20px;
        }
        .body li {
            margin-bottom: 10px;
        }
        .btn {
            display: inline-block;
            padding: 14px 32px;
            background-color: #0f172a;
            color: white !important;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin: 20px 0;
        }
        .info-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .signature {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }
        .signature .name {
            color: #0f172a;
            font-weight: 600;
        }
        .footer {
            background: #f8fafc;
            padding: 30px 40px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .footer p {
            color: #94a3b8;
            font-size: 12px;
            margin: 5px 0;
        }
        .footer a {
            color: #64748b;
        }
    </style>
</head>
<body>
    <center style="padding: 40px 0;">
        <table class="container" cellspacing="0" cellpadding="0" border="0" width="600">
            <tr>
                <td class="header">
                    <h1>{{ company_name }}</h1>
                    <p>{{ tagline }}</p>
                </td>
            </tr>
            <tr>
                <td class="body">
                    <p style="color: #64748b; font-size: 14px;">{{ greeting }} {{ recipient_name }},</p>

                    <h2>{{ title }}</h2>

                    {{ content }}

                    {% if cta_text and cta_url %}
                    <center>
                        <a href="{{ cta_url }}" class="btn">{{ cta_text }}</a>
                    </center>
                    {% endif %}

                    <div class="signature">
                        <p class="name">{{ sender_name }}</p>
                        <p style="color: #64748b; font-size: 13px;">{{ sender_title }}</p>
                        <p style="margin-top: 10px;">
                            <a href="mailto:{{ company_email }}">{{ company_email }}</a> |
                            <a href="tel:{{ company_phone }}">{{ company_phone }}</a>
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <p><strong>{{ company_name }}</strong></p>
                    <p>{{ company_address }}</p>
                    <p style="margin-top: 15px;">
                        <a href="{{ privacy_url }}">Privacy Policy</a> |
                        <a href="{{ terms_url }}">Terms of Service</a>
                    </p>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
"""

def create_email(data: dict, output_dir: str = "./output") -> str:
    """
    Create an email HTML file.

    data = {
        "lang": "en",  # or "ar"
        "recipient_name": "John",
        "subject": "Thank You for Your Inquiry",
        "title": "Thank You for Reaching Out",
        "content": "<p>Your message here...</p>",
        "cta_text": "Visit Website",
        "cta_url": "https://neotechnology.solutions",
        "sender_name": "NeoTechnology Team",
        "sender_title": "IT Consulting",
    }
    """
    if not JINJA2_OK:
        print("❌ jinja2 required for email generation")
        return None

    output_path = Path(output_dir)
    output_path.mkdir(parents=True, exist_ok=True)

    lang = data.get("lang", "en")

    template = Template(EMAIL_TEMPLATE)
    html = template.render(
        lang=lang,
        company_name=COMPANY["name"] if lang == "en" else COMPANY["name_ar"],
        tagline=COMPANY["tagline"] if lang == "en" else COMPANY["tagline_ar"],
        company_email=COMPANY["email"],
        company_phone=COMPANY["phone"],
        company_address=f"{COMPANY['address']}, {COMPANY['city']}, {COMPANY['state']} {COMPANY['zip']}",
        privacy_url=f"{COMPANY['website']}/privacy/",
        terms_url=f"{COMPANY['website']}/terms/",
        greeting="Hello" if lang == "en" else "مرحباً",
        recipient_name=data.get("recipient_name", ""),
        subject=data.get("subject", ""),
        title=data.get("title", ""),
        content=data.get("content", ""),
        cta_text=data.get("cta_text", ""),
        cta_url=data.get("cta_url", ""),
        sender_name=data.get("sender_name", "NeoTechnology Team"),
        sender_title=data.get("sender_title", "IT Consulting"),
    )

    timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
    filename = f"email_{timestamp}.html"
    filepath = output_path / filename

    with open(filepath, "w", encoding="utf-8") as f:
        f.write(html)

    return str(filepath)


# ============================================
# Interactive CLI
# ============================================

def clear_screen():
    os.system('cls' if os.name == 'nt' else 'clear')

def print_header():
    print("\n" + "=" * 60)
    print("   NeoTechnology Solutions - Document Designer")
    print("          🤖 AI-Powered Edition v2.0")
    print("=" * 60)
    if ai_assistant.enabled:
        print("  ✓ AI Assistant: Connected")
    else:
        print("  ⚠ AI Assistant: Not configured (set ANTHROPIC_API_KEY)")

def print_menu():
    print("\n📄 What would you like to create?\n")
    print("  --- Manual Creation ---")
    print("  [1] Proposal (PDF)")
    print("  [2] Contract (PDF)")
    print("  [3] Email Template (HTML)")
    print()
    print("  --- Quick Generation ---")
    print("  [4] Quick Proposal (sample data)")
    print("  [5] Quick Contract (sample data)")
    print("  [6] Quick Email (sample data)")
    print()
    if ai_assistant.enabled:
        print("  --- 🤖 AI-Powered ---")
        print("  [7] AI Proposal Generator")
        print("  [8] AI Email Writer")
        print("  [9] AI Text Improver")
        print()
    print("  [0] Exit")
    print()

def get_input(prompt, default=""):
    """Get user input with optional default."""
    if default:
        result = input(f"{prompt} [{default}]: ").strip()
        return result if result else default
    return input(f"{prompt}: ").strip()

def get_list_input(prompt):
    """Get list input from user."""
    print(f"\n{prompt}")
    print("(Enter items one per line, empty line to finish)")
    items = []
    while True:
        item = input("  > ").strip()
        if not item:
            break
        items.append(item)
    return items

def create_proposal_interactive():
    """Interactive proposal creation."""
    print("\n" + "-" * 40)
    print("📋 CREATE PROPOSAL")
    print("-" * 40)

    data = {}
    data["client_company"] = get_input("Client Company Name")
    data["client_name"] = get_input("Client Contact Name")
    data["client_email"] = get_input("Client Email")
    data["project_title"] = get_input("Project Title", "IT Consulting Services")
    data["project_description"] = get_input("Project Description (brief)")

    data["scope"] = get_list_input("Scope of Work items:")
    data["deliverables"] = get_list_input("Deliverables:")

    data["timeline_weeks"] = int(get_input("Timeline (weeks)", "4"))

    # Line items
    print("\n💰 Pricing (line items):")
    print("(Enter 'done' when finished)")
    line_items = []
    while True:
        desc = input("  Item description (or 'done'): ").strip()
        if desc.lower() == 'done' or not desc:
            break
        try:
            amount = float(input("  Amount ($): ").strip())
            line_items.append({"description": desc, "amount": amount})
        except ValueError:
            print("  Invalid amount, skipping...")
    data["line_items"] = line_items

    try:
        data["discount"] = float(get_input("Discount amount ($)", "0"))
    except ValueError:
        data["discount"] = 0

    data["valid_days"] = int(get_input("Proposal valid for (days)", "30"))

    # Generate
    gen = DocumentGenerator()
    filepath = gen.create_proposal(data)
    print(f"\n✅ Proposal created: {filepath}")
    return filepath

def create_contract_interactive():
    """Interactive contract creation."""
    print("\n" + "-" * 40)
    print("📋 CREATE CONTRACT")
    print("-" * 40)

    data = {}
    data["client_company"] = get_input("Client Company Name")
    data["client_name"] = get_input("Client Contact Name")
    data["client_email"] = get_input("Client Email")
    data["client_address"] = get_input("Client Address")
    data["project_title"] = get_input("Project Title", "IT Consulting Services")

    try:
        data["total_fee"] = float(get_input("Total Fee ($)", "10000"))
    except ValueError:
        data["total_fee"] = 10000

    # Generate
    gen = DocumentGenerator()
    filepath = gen.create_contract(data)
    print(f"\n✅ Contract created: {filepath}")
    return filepath

def create_email_interactive():
    """Interactive email creation."""
    print("\n" + "-" * 40)
    print("📧 CREATE EMAIL TEMPLATE")
    print("-" * 40)

    lang = get_input("Language (en/ar)", "en")

    data = {
        "lang": lang,
        "recipient_name": get_input("Recipient Name"),
        "subject": get_input("Email Subject"),
        "title": get_input("Email Title/Heading"),
        "sender_name": get_input("Sender Name", "NeoTechnology Team"),
        "sender_title": get_input("Sender Title", "IT Consulting"),
    }

    print("\nEmail Content (enter HTML, end with empty line):")
    content_lines = []
    while True:
        line = input()
        if not line:
            break
        content_lines.append(line)
    data["content"] = "\n".join(content_lines)

    cta = get_input("Add Call-to-Action button? (y/n)", "n")
    if cta.lower() == 'y':
        data["cta_text"] = get_input("Button Text", "Learn More")
        data["cta_url"] = get_input("Button URL", COMPANY["website"])

    filepath = create_email(data)
    print(f"\n✅ Email template created: {filepath}")
    return filepath

def create_quick_proposal():
    """Create proposal with sample data."""
    print("\n⚡ Creating quick proposal with sample data...")

    data = {
        "client_company": "Sample Client Inc.",
        "client_name": "John Doe",
        "client_email": "john@sampleclient.com",
        "project_title": "Cloud Infrastructure Assessment",
        "project_description": "Comprehensive assessment of current cloud infrastructure with recommendations for optimization, cost reduction, and security improvements.",
        "scope": [
            "Current state infrastructure audit",
            "Cost analysis and optimization recommendations",
            "Security posture assessment",
            "Architecture review and recommendations",
            "Migration roadmap development",
        ],
        "deliverables": [
            "Infrastructure Assessment Report",
            "Cost Optimization Recommendations",
            "Security Findings Report",
            "Architecture Recommendations Document",
            "Executive Summary Presentation",
        ],
        "timeline_weeks": 4,
        "line_items": [
            {"description": "Discovery & Assessment Phase", "amount": 5000},
            {"description": "Strategy Development", "amount": 4000},
            {"description": "Documentation & Reporting", "amount": 2000},
        ],
        "discount": 500,
        "valid_days": 30,
    }

    gen = DocumentGenerator()
    filepath = gen.create_proposal(data)
    print(f"\n✅ Quick proposal created: {filepath}")
    return filepath

def create_quick_contract():
    """Create contract with sample data."""
    print("\n⚡ Creating quick contract with sample data...")

    data = {
        "client_company": "Sample Client Inc.",
        "client_name": "John Doe",
        "client_email": "john@sampleclient.com",
        "client_address": "123 Business Ave, Suite 100, New York, NY 10001",
        "project_title": "IT Consulting Services",
        "total_fee": 10500,
    }

    gen = DocumentGenerator()
    filepath = gen.create_contract(data)
    print(f"\n✅ Quick contract created: {filepath}")
    return filepath

def create_quick_email():
    """Create email with sample data."""
    print("\n⚡ Creating quick email template with sample data...")

    data = {
        "lang": "en",
        "recipient_name": "John",
        "subject": "Thank You for Your Inquiry",
        "title": "Thank You for Reaching Out",
        "content": """
        <p>Thank you for contacting NeoTechnology Solutions. We've received your inquiry and are excited to learn more about your IT challenges.</p>

        <h3>What Happens Next</h3>
        <ol>
            <li><strong>Review</strong> - We're reviewing your submission</li>
            <li><strong>Schedule</strong> - We'll reach out to schedule a discovery call</li>
            <li><strong>Discovery Call</strong> - 15-30 minute conversation</li>
            <li><strong>Proposal</strong> - If aligned, we'll send a detailed proposal</li>
        </ol>

        <p>In the meantime, feel free to explore our website to learn more about our services.</p>
        """,
        "cta_text": "Visit Our Website",
        "cta_url": COMPANY["website"],
        "sender_name": "NeoTechnology Team",
        "sender_title": "IT Decision Advisory",
    }

    filepath = create_email(data)
    print(f"\n✅ Quick email created: {filepath}")
    return filepath


# ============================================
# AI-Powered Functions
# ============================================

def ai_proposal_generator():
    """AI-powered proposal generation."""
    if not ai_assistant.enabled:
        print("\n❌ AI not available. Set ANTHROPIC_API_KEY environment variable.")
        return

    print("\n" + "-" * 40)
    print("🤖 AI PROPOSAL GENERATOR")
    print("-" * 40)

    # Get basic info
    client_company = get_input("Client Company Name")
    client_name = get_input("Client Contact Name")
    client_email = get_input("Client Email")

    # Get AI inputs
    print("\n📊 Project Details for AI:")
    project_type = get_input("Project Type (e.g., Cloud Migration, Security Assessment, Digital Transformation)")
    client_industry = get_input("Client Industry (e.g., Finance, Healthcare, Retail)")
    budget_range = get_input("Budget Range (optional, e.g., $10k-20k)", "")

    print("\n🤖 Generating proposal content with AI...")
    print("   (This may take a moment)")

    ai_content = ai_assistant.generate_proposal_content(
        project_type=project_type,
        client_industry=client_industry,
        budget_range=budget_range if budget_range else None
    )

    if not ai_content:
        print("\n⚠️  AI generation failed. Falling back to manual entry.")
        return create_proposal_interactive()

    # Show AI suggestions
    print("\n✨ AI Generated Content:")
    print("-" * 40)
    print(f"\nProject Description:\n  {ai_content.get('project_description', 'N/A')}")

    print("\nScope of Work:")
    for item in ai_content.get("scope", []):
        print(f"  • {item}")

    print("\nDeliverables:")
    for i, item in enumerate(ai_content.get("deliverables", []), 1):
        print(f"  {i}. {item}")

    print(f"\nSuggested Timeline: {ai_content.get('timeline_weeks', 4)} weeks")

    print("\nSuggested Pricing:")
    total = 0
    for item in ai_content.get("suggested_line_items", []):
        print(f"  - {item['description']}: ${item['amount']:,.2f}")
        total += item.get("amount", 0)
    print(f"  Total: ${total:,.2f}")

    print("-" * 40)

    # Confirm or edit
    use_ai = get_input("\nUse this AI-generated content? (y/n/edit)", "y")

    if use_ai.lower() == 'n':
        print("Cancelled. Returning to menu.")
        return

    # Build data
    data = {
        "client_company": client_company,
        "client_name": client_name,
        "client_email": client_email,
        "project_title": project_type,
        "project_description": ai_content.get("project_description", ""),
        "scope": ai_content.get("scope", []),
        "deliverables": ai_content.get("deliverables", []),
        "timeline_weeks": ai_content.get("timeline_weeks", 4),
        "line_items": ai_content.get("suggested_line_items", []),
        "discount": 0,
        "valid_days": 30,
    }

    if use_ai.lower() == 'edit':
        # Allow editing
        data["project_title"] = get_input("Project Title", data["project_title"])
        data["project_description"] = get_input("Project Description", data["project_description"])

        edit_scope = get_input("Edit scope items? (y/n)", "n")
        if edit_scope.lower() == 'y':
            data["scope"] = get_list_input("Scope of Work items:")

        edit_pricing = get_input("Edit pricing? (y/n)", "n")
        if edit_pricing.lower() == 'y':
            print("\n💰 Pricing (line items):")
            line_items = []
            while True:
                desc = input("  Item description (or 'done'): ").strip()
                if desc.lower() == 'done' or not desc:
                    break
                try:
                    amount = float(input("  Amount ($): ").strip())
                    line_items.append({"description": desc, "amount": amount})
                except ValueError:
                    print("  Invalid amount, skipping...")
            data["line_items"] = line_items

        try:
            data["discount"] = float(get_input("Discount amount ($)", "0"))
        except ValueError:
            data["discount"] = 0

    # Generate PDF
    gen = DocumentGenerator()
    filepath = gen.create_proposal(data)
    print(f"\n✅ AI-Powered Proposal created: {filepath}")
    return filepath


def ai_email_writer():
    """AI-powered email writing."""
    if not ai_assistant.enabled:
        print("\n❌ AI not available. Set ANTHROPIC_API_KEY environment variable.")
        return

    print("\n" + "-" * 40)
    print("🤖 AI EMAIL WRITER")
    print("-" * 40)

    print("\nEmail Types:")
    print("  1. Thank you / Inquiry response")
    print("  2. Proposal follow-up")
    print("  3. Meeting confirmation")
    print("  4. Project update")
    print("  5. Custom")

    type_choice = get_input("Select email type (1-5)", "1")
    email_types = {
        "1": "Thank you for inquiry",
        "2": "Proposal follow-up",
        "3": "Meeting confirmation",
        "4": "Project update",
        "5": "Custom",
    }
    email_type = email_types.get(type_choice, "Custom")

    if email_type == "Custom":
        email_type = get_input("Describe the email type")

    recipient_name = get_input("Recipient Name")
    context = get_input("Additional context (optional)", "")
    lang = get_input("Language (en/ar)", "en")

    print("\n🤖 Writing email with AI...")

    ai_content = ai_assistant.generate_email_content(
        email_type=email_type,
        recipient_name=recipient_name,
        context=context,
        language=lang
    )

    if not ai_content:
        print("\n⚠️  AI generation failed. Falling back to manual entry.")
        return create_email_interactive()

    # Show AI suggestion
    print("\n✨ AI Generated Email:")
    print("-" * 40)
    print(f"Subject: {ai_content.get('subject', 'N/A')}")
    print(f"Title: {ai_content.get('title', 'N/A')}")
    print(f"\nContent Preview:\n{ai_content.get('content', '')[:300]}...")
    print("-" * 40)

    use_ai = get_input("\nUse this AI-generated email? (y/n)", "y")

    if use_ai.lower() != 'y':
        print("Cancelled. Returning to menu.")
        return

    # Build email data
    data = {
        "lang": lang,
        "recipient_name": recipient_name,
        "subject": ai_content.get("subject", ""),
        "title": ai_content.get("title", ""),
        "content": ai_content.get("content", ""),
        "cta_text": "Visit Our Website",
        "cta_url": COMPANY["website"],
        "sender_name": "NeoTechnology Team",
        "sender_title": "IT Consulting",
    }

    filepath = create_email(data)
    print(f"\n✅ AI-Written Email created: {filepath}")
    return filepath


def ai_text_improver():
    """AI-powered text improvement."""
    if not ai_assistant.enabled:
        print("\n❌ AI not available. Set ANTHROPIC_API_KEY environment variable.")
        return

    print("\n" + "-" * 40)
    print("🤖 AI TEXT IMPROVER")
    print("-" * 40)

    print("\nPaste your text below (end with an empty line):")
    lines = []
    while True:
        line = input()
        if not line:
            break
        lines.append(line)
    text = "\n".join(lines)

    if not text.strip():
        print("No text provided.")
        return

    print("\nStyle options:")
    print("  1. Professional")
    print("  2. Friendly")
    print("  3. Formal")
    print("  4. Concise")

    style_choice = get_input("Select style (1-4)", "1")
    styles = {"1": "professional", "2": "friendly", "3": "formal", "4": "concise"}
    style = styles.get(style_choice, "professional")

    print(f"\n🤖 Improving text ({style} style)...")

    improved = ai_assistant.improve_text(text, style)

    if not improved:
        print("\n⚠️  AI improvement failed.")
        return

    print("\n✨ Improved Text:")
    print("-" * 40)
    print(improved)
    print("-" * 40)

    copy_choice = get_input("\nSave to file? (y/n)", "n")
    if copy_choice.lower() == 'y':
        output_dir = Path("./output")
        output_dir.mkdir(exist_ok=True)
        timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
        filepath = output_dir / f"improved_text_{timestamp}.txt"
        with open(filepath, "w") as f:
            f.write(f"Original:\n{text}\n\n---\n\nImproved ({style}):\n{improved}")
        print(f"\n✅ Saved to: {filepath}")


def main():
    """Main interactive loop."""
    if not REPORTLAB_OK:
        print("\n❌ Error: reportlab is required for PDF generation")
        print("   Install with: pip install reportlab")
        sys.exit(1)

    while True:
        clear_screen()
        print_header()
        print_menu()

        choice = input("Enter your choice: ").strip()

        if choice == "1":
            create_proposal_interactive()
            input("\nPress Enter to continue...")
        elif choice == "2":
            create_contract_interactive()
            input("\nPress Enter to continue...")
        elif choice == "3":
            create_email_interactive()
            input("\nPress Enter to continue...")
        elif choice == "4":
            create_quick_proposal()
            input("\nPress Enter to continue...")
        elif choice == "5":
            create_quick_contract()
            input("\nPress Enter to continue...")
        elif choice == "6":
            create_quick_email()
            input("\nPress Enter to continue...")
        elif choice == "7" and ai_assistant.enabled:
            ai_proposal_generator()
            input("\nPress Enter to continue...")
        elif choice == "8" and ai_assistant.enabled:
            ai_email_writer()
            input("\nPress Enter to continue...")
        elif choice == "9" and ai_assistant.enabled:
            ai_text_improver()
            input("\nPress Enter to continue...")
        elif choice == "0":
            print("\n👋 Goodbye!")
            break
        else:
            print("\n❌ Invalid choice. Please try again.")
            input("Press Enter to continue...")


if __name__ == "__main__":
    main()
