# Tasneem Bharmal — Portfolio

Interactive PHP portfolio with a chat-style UI. Explore skills, projects, education, and contact — all through a conversational interface.

![Portfolio preview](img/preview.png)

## Live demo

Run locally with XAMPP/Apache:

```
http://localhost/demos/
```

## Features

- **Chat-based navigation** — ask about skills, projects, education, CV, and more
- **Project showcase** — Niftendo (NFT marketplace) and Investify (stock market learning app)
- **CV download** — saves as `Tasneem Bharmal - CV.pdf`
- **Contact form** — messages logged via `contact.php`
- **Dark theme** — multicolor accent skin with side stack/focus panels
- **Responsive layout** — works on desktop and mobile

## Tech stack

| Layer | Technologies |
|-------|--------------|
| Backend | PHP |
| Frontend | HTML, CSS, JavaScript |
| Icons | Font Awesome |
| Fonts | Geist, Unbounded (Google Fonts) |
| Server | Apache (XAMPP) |

## Project structure

```
├── index.php              # Main entry point
├── contact.php            # Contact form handler
├── link-to-cv.php         # CV download
├── includes/
│   ├── config.php         # Site settings & helpers
│   ├── head.php           # <head> partial
│   ├── chat-ui.php        # Intro & chat shell
│   ├── sections.php       # Chat flow content
│   ├── footer.php         # Scripts & UI chrome
│   └── side-decor.php     # Side stack/focus panels
├── css/                   # Styles (style, custom, theme)
├── js/                    # app.js, typewriter.js
├── img/                   # Avatars, projects, favicon
└── storage/               # Contact message log
```

## Local setup

1. Clone the repo into your web root (e.g. `htdocs/demos`)
2. Start Apache in XAMPP
3. Open `http://localhost/demos/`
4. Place your CV as `link-to-cv.pdf` in the project root (or update `cv_file` in `includes/config.php`)

## Configuration

Edit `includes/config.php` to update:

- Name, role, tagline
- Email, phone, location
- GitHub & LinkedIn URLs
- Intro quote
- CV file path

## Contact

- **Email:** tasneembharmal712@gmail.com
- **GitHub:** [@T-B404](https://github.com/T-B404)
- **LinkedIn:** [tasneem-b-400880292](https://linkedin.com/in/tasneem-b-400880292)

## License

Personal portfolio project — feel free to use as reference; please don’t copy verbatim for your own portfolio.
