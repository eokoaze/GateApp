# GateApp

A replica of **[Gate](https://www.gate.com)** listing web application that streamlines the process of submitting and managing token listing requests. The platform supports both individual and project-based listing submissions, provides a tool for verifying official Gate.io social media handles, and includes an admin dashboard for reviewing submissions and monitoring activity.

---

## Features

### Token Listing Requests
- **Individual Listing Form** — Allows individuals to submit a token listing request by providing details such as the token name, coin symbol, project website, whitepaper link, and a recommendation.
- **Project Listing Form** — A comprehensive form for companies and project teams covering company information, team profile, tokenomics (supply, distribution, contract address, block explorer, etc.), technical framework, ecosystem, roadmap, marketing plans, and more. Supports receipt/proof-of-payment file upload.

### Social Handle Verification
- A public-facing tool that allows users to verify whether a given social media handle (e.g. Twitter, Telegram) is an **official Gate.io account**.
- Looks up handles against a curated, admin-managed list of verified official accounts.
- All verification attempts are logged (platform, handle, IP address, user agent) for auditing purposes.

### Admin Dashboard (`/ddash`)
- View and paginate all **individual** and **project** listing submissions.
- Manage the list of **official social media handles** — add or remove entries per platform.
- Review **social handle verification attempts** (who searched for what and when).
- Monitor a live **activity log** of all form submissions across the platform.

### Activity Logging
- Every listing submission (individual or project) is automatically logged with metadata including IP address, user agent, and key identifiers.

---

## Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel 11 (PHP ^8.2) |
| Frontend | Blade Templates + TailwindCSS + Vite |
| Database | MySQL / SQLite |
| CI/CD | GitHub Actions (deploy to server) |

---

## Getting Started

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js & npm
- A database (MySQL recommended)

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/eokoaze/GateApp.git
cd GateApp

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Set up environment
cp .env.example .env
php artisan key:generate

# 5. Configure your database in .env, then run migrations
php artisan migrate

# 6. Start the development server
composer run dev
```

The app will be available at `http://localhost:8000`.

---

## Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── ListingController.php       # Handles individual & project listing submissions
│   │   ├── SocialHandleController.php  # Manages official handle verification & storage
│   │   └── ActivityController.php      # Logs submission activity
│   └── Middleware/
database/
├── migrations/                         # All DB schema definitions
resources/
├── views/                              # Blade templates
routes/
└── web.php                             # Application routes
.github/
└── workflows/                          # GitHub Actions CI/CD pipeline
```

---

## Routes Overview

| Method | URI | Description |
|---|---|---|
| GET | `/listingrequest` | Listing home page |
| GET | `/listingrequestindiv` | Individual listing form |
| GET | `/listingrequestproj` | Project listing form |
| POST | `/newlisting_i` | Submit individual listing |
| POST | `/newlisting_p` | Submit project listing |
| GET | `/verify-handles` | Social handle verification tool |
| POST | `/dashboard/social-handles` | Add a verified social handle (admin) |
| DELETE | `/dashboard/social-handles/{id}` | Remove a verified social handle (admin) |
| GET | `/ddash` | Admin dashboard |

---

## Deployment

This project uses GitHub Actions for automated deployment. The workflow is defined in `.github/workflows/deploy.yml` and handles SSH-based deployment to the production server on every push to `main`.

---

## License

This project is proprietary software developed by Eokoaze.
