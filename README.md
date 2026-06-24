## Live demo

**[https://tasneem-portfolio.onrender.com](https://tasneem-portfolio.onrender.com)**

# Tasneem Bharmal — Portfolio

Interactive PHP portfolio with a chat-style UI. Explore skills, projects, education, and contact — all through a conversational interface.

![Portfolio preview](img/preview.png)

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
| Backend | PHP 8.2, Apache |
| Frontend | HTML, CSS, JavaScript |
| Icons | Font Awesome |
| Fonts | Geist, Unbounded (Google Fonts) |
| Hosting | [Render](https://render.com) (Docker) |

## Local setup

1. Clone the repo
2. Place in XAMPP `htdocs/demos` (or any Apache + PHP setup)
3. Open `http://localhost/demos/`
4. Ensure `link-to-cv.pdf` exists in the project root

## Keep site awake (Render free tier)

Render sleeps after ~15 minutes of no traffic, which causes a slow first load (black screen on mobile). Two ways to prevent that:

### Option A — UptimeRobot (recommended, 2 minutes)

1. Sign up at [uptimerobot.com](https://uptimerobot.com) (free)
2. Click **Add New Monitor**
3. Settings:
   - **Monitor Type:** HTTP(s)
   - **Friendly Name:** Tasneem Portfolio
   - **URL:** `https://tasneem-portfolio.onrender.com`
   - **Monitoring Interval:** 5 minutes
4. Click **Create Monitor**

UptimeRobot will ping your site every 5 minutes so it stays warm.

### Option B — GitHub Actions (already in this repo)

The workflow `.github/workflows/keep-alive.yml` pings the site every 10 minutes automatically after you push to GitHub. Enable it under **Actions** tab on your repo (runs on public repos for free).

## Contact

- **Email:** tasneembharmal712@gmail.com
- **GitHub:** [@T-B404](https://github.com/T-B404)
- **LinkedIn:** [tasneem-b-400880292](https://linkedin.com/in/tasneem-b-400880292)

## License

Personal portfolio project — feel free to use as reference; please don’t copy verbatim for your own portfolio.
