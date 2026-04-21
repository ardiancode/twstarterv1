# TWStarterV1

A lightweight **classic WordPress starter theme** built with modern development practices, including **WordPress Coding Standards (WPCS)**, **PHPCS linting**, and optional **Tailwind CSS** support.

---

## 🚀 Features

* Classic WordPress theme structure
* Clean and minimal `index.php`
* WordPress Coding Standards (WPCS) ready
* PHPCS + PHPCBF integration
* Composer-based PHP tooling
* Optional Tailwind CSS workflow
* Developer-friendly structure

---

## 📂 Project Structure

```
twstarterv1/
├── functions.php
├── index.php
├── style.css
├── package.json
├── composer.json
├── vendor/
└── assets/
```

---

## ⚙️ Requirements

* PHP >= 7.4
* Composer
* Node.js & npm (optional, for frontend tools)
* WordPress (latest recommended)

---

## 📦 Installation

### 1. Clone the repository

```bash
git clone https://github.com/your-username/twstarterv1.git
cd twstarterv1
```

---

### 2. Install PHP dependencies (PHPCS, WPCS)

```bash
composer install
```

---

### 3. (Optional) Install Node dependencies

```bash
npm install
```

---

## 🧹 Linting (PHPCS)

Run PHP CodeSniffer:

```bash
composer run lint:php
```

Fix coding standard issues automatically:

```bash
composer run fix:php
```

---

## 📜 Coding Standards

This theme follows:

* WordPress Coding Standards (WPCS)
* PSR-12 (where applicable)

Make sure your editor is configured to follow the same standards.

---

## 🧩 NPM Scripts (Optional)

If you're using npm:

```bash
npm run lint:php
npm run fix:php
```

> ⚠️ On Windows, ensure paths use `vendor\\bin\\phpcs.bat`

---

## 🎨 Tailwind CSS (Optional)

If you are using Tailwind:

```bash
npm run dev
```

Make sure your `tailwind.config.js` scans all PHP files:

```js
content: [
  "./*.php",
  "./inc/**/*.php",
  "./template-parts/**/*.php",
  "./src/**/*.js",
],
```

---

## 📌 Theme Setup

The theme includes:

* `add_theme_support()` for:

  * title-tag
  * post-thumbnails
  * html5
  * custom-logo
  * align-wide
  * responsive-embeds
* Navigation menu registration
* Translation support

---

## 🛠 Development Notes

* This is a **classic theme**, not a block theme
* Header and footer are currently inside `index.php` (can be modularized)
* Recommended to split into:

  * `header.php`
  * `footer.php`
  * `template-parts/`

---

## 🔄 Future Improvements

* Convert to modular template structure
* Add `theme.json` for hybrid/block support
* Improve accessibility (a11y)
* Add CI for linting

---

## 📄 License

This project is licensed under the MIT License.

---

## 👤 Author

Ardian Yusuf Pradana
WordPress Developer (React, Gutenberg, JavaScript)

---

## ⭐ Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

---

## 💡 Tip

Always run linting before committing:

```bash
composer run lint:php
```

---
