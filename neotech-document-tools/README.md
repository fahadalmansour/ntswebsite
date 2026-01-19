# NeoTechnology Document Designer

AI-Powered standalone tool for creating professional proposals, contracts, and email templates.

## Setup

```bash
cd neotech-document-tools
pip install -r requirements.txt
```

### Enable AI Features (Optional)

1. Get an API key from [Anthropic Console](https://console.anthropic.com/)
2. Create a `.env` file:
   ```bash
   cp .env.example .env
   # Edit .env and add your API key
   ```

Or set the environment variable:
```bash
export ANTHROPIC_API_KEY=sk-ant-api03-your-key-here
```

## Usage

### Interactive Mode
```bash
python document_designer.py
```

### Menu Options

**Manual Creation:**
- [1] Proposal (PDF) - Step-by-step form
- [2] Contract (PDF) - Consulting agreement
- [3] Email Template (HTML) - Branded emails

**Quick Generation:**
- [4-6] Generate with sample data

**AI-Powered (requires API key):**
- [7] AI Proposal Generator - AI creates scope, deliverables, pricing
- [8] AI Email Writer - AI writes professional emails
- [9] AI Text Improver - Polish your text

## Features

### Manual Mode
- Professional PDF proposals with pricing tables
- Legal consulting agreements with terms
- Branded HTML email templates (English & Arabic)

### AI Mode
- **AI Proposal Generator**: Provide project type and industry, AI generates:
  - Project description
  - Scope of work items
  - Deliverables list
  - Timeline estimate
  - Pricing breakdown

- **AI Email Writer**: Select email type, AI generates:
  - Subject line
  - Email content
  - Professional formatting
  - Arabic support

- **AI Text Improver**: Paste text, AI improves it in styles:
  - Professional
  - Friendly
  - Formal
  - Concise

## Output

All generated documents are saved to `./output/` directory:
- `proposal_NTS-*.pdf` - Proposals
- `contract_CSA-*.pdf` - Contracts
- `email_*.html` - Email templates
- `improved_text_*.txt` - AI-improved text

## Company Configuration

Edit the `COMPANY` dictionary in `document_designer.py` to customize:
- Company name (English & Arabic)
- Contact information
- Address
- Branding colors
- Website URLs
