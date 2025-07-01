# Bilingual News Bulletin Manager

## 🔐 Admin Panel

- **URL:** `/admin.php`
- **Username:** `admin`
- **Password:** `12345`

## 📰 Public News Page

- **URL:** `/index.php`
- Displays the latest 5 posts
- Supports bilingual toggle (English & Arabic)
- Arabic is RTL using CSS
- Uses JavaScript for language switch (no reload)

## 💾 Storage

- Posts are stored in `data.json` in this format:
```json
{
  "title_en": "English Title",
  "title_ar": "Arabic Title",
  "desc_en": "English Description",
  "desc_ar": "Arabic Description",
  "date": "YYYY-MM-DD HH:MM:SS"
}
