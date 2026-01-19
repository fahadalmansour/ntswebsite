# cPanel Migration Instructions

Move the internal dashboard to `/dashboard/` and replace homepage with the business landing page.

---

## Step 1: Backup Current Files (Safety)

1. Log into cPanel at **162.254.39.146:21098**
2. Go to **File Manager** → **public_html**
3. Right-click on `index.html` → **Compress** → Save as `backup-index-YYYYMMDD.zip`
4. Download the backup to your local machine

---

## Step 2: Create Dashboard Folder

1. In File Manager, navigate to **public_html**
2. Click **+ Folder** in the toolbar
3. Name it: `dashboard`
4. Click **Create New Folder**

---

## Step 3: Move Dashboard Files

### Option A: If only index.html is the dashboard

1. Right-click on `index.html`
2. Click **Move**
3. Enter path: `/public_html/dashboard/index.html`
4. Click **Move File(s)**

### Option B: If multiple dashboard files exist

1. Select all dashboard-related files (Ctrl/Cmd + click):
   - index.html
   - Any JS files (dashboard.js, etc.)
   - Any CSS files
   - Any assets folders
2. Click **Move** in toolbar
3. Enter path: `/public_html/dashboard/`
4. Click **Move File(s)**

---

## Step 4: Upload New Homepage

1. Navigate to **public_html** (root)
2. Click **Upload** in toolbar
3. Drag and drop `index.html` (the new business homepage)
4. Wait for upload to complete
5. Click **Go Back to /public_html**

---

## Step 5: Verify

### Public Homepage
- Visit: https://neotechnology.solutions
- Should show: Professional business landing page
- Test: English/Arabic language switcher
- Test: Email links work
- Test: Mobile responsive

### Dashboard (Private)
- Visit: https://neotechnology.solutions/dashboard/
- Should show: Your internal CEO dashboard
- Verify: All dashboard functionality works

---

## Step 6: Password Protect Dashboard (Recommended)

1. In cPanel, go to **Directory Privacy** (or **Password Protect Directories**)
2. Navigate to `public_html/dashboard`
3. Check **Password protect this directory**
4. Enter a name for the protected area: `Admin Dashboard`
5. Click **Save**
6. Create a user:
   - Username: `admin` (or your choice)
   - Password: Strong password
7. Click **Save**

Now `/dashboard/` will require login.

---

## File Structure After Migration

```
public_html/
├── index.html          ← NEW business homepage
├── dashboard/
│   └── index.html      ← Your internal dashboard
│   └── (other dashboard files)
└── (other existing files)
```

---

## Quick Rollback (If Needed)

1. Go to File Manager → public_html
2. Delete the new `index.html`
3. Move `/dashboard/index.html` back to `/public_html/index.html`
4. Or: Extract your backup zip

---

## Alternative: FTP Upload

If you prefer FTP/SFTP:

```bash
# Connect
sftp user@neotechnology.solutions

# Create dashboard folder
mkdir public_html/dashboard

# Move dashboard
mv public_html/index.html public_html/dashboard/

# Upload new homepage
put index.html public_html/
```

---

## Need Help?

If you encounter issues:
1. Check File Manager permissions (files should be 644, folders 755)
2. Clear browser cache
3. Check .htaccess isn't blocking anything

---

**Estimated Time:** 5-10 minutes
