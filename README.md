# PierreBultez — Portfolio Développeur

![Deploy](https://github.com/PierreBultez/developer/actions/workflows/deploy.yml/badge.svg)
![Tests](https://github.com/PierreBultez/developer/actions/workflows/tests.yml/badge.svg)
![Linter](https://github.com/PierreBultez/developer/actions/workflows/lint.yml/badge.svg)

Portfolio personnel construit avec **Laravel 12**, **Livewire / Volt**, **Flux UI** et **Tailwind CSS 4** + **DaisyUI 5**.

---

## 🛠️ Stack technique

| Couche                | Technologie                  |
|-----------------------|------------------------------|
| **Backend**           | PHP 8.4 — Laravel 12         |
| **Frontend**          | Livewire / Volt, Flux UI     |
| **CSS**               | Tailwind CSS 4, DaisyUI 5    |
| **Build**             | Vite 6, Laravel Vite Plugin  |
| **Base de données**   | MySQL (SQLite en local)      |
| **Tests**             | PHPUnit 11                   |
| **Linter**            | Laravel Pint                 |
| **CI/CD**             | GitHub Actions               |

---

## 📦 Prérequis

- **PHP** ≥ 8.4
- **Composer** ≥ 2
- **Node.js** ≥ 22 (npm)
- **MySQL** (ou SQLite pour le développement local)

---

## 🚀 Installation

\`\`\`bash
git clone https://github.com/PierreBultez/developer.git
cd developer
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run build
\`\`\`

---

## ⚡ Développement

\`\`\`bash
composer dev
\`\`\`

Démarre simultanément : serveur HTTP, queue worker, logs temps réel et Vite HMR.

---

## 🧪 Tests

\`\`\`bash
php artisan test
\`\`\`

---

## 🧹 Linting

\`\`\`bash
./vendor/bin/pint
\`\`\`

---

## 🗂️ Structure du projet

\`\`\`
app/Livewire/
├── Components/CookieBanner.php
├── Home.php
├── Pages/Legal.php
├── Pages/Privacy.php
├── ProjectCard.php
└── ProjectCarousel.php
\`\`\`

### Routes

| URL                | Composant | Description                  |
|--------------------|-----------|------------------------------|
| /                  | Home      | Page d'accueil / portfolio   |
| /confidentialite   | Privacy   | Politique de confidentialité |
| /mentions-legales  | Legal     | Mentions légales             |

---

## 🔄 CI/CD

| Workflow   | Déclencheur                     | Rôle                               |
|------------|---------------------------------|------------------------------------|
| **tests**  | Push / PR sur develop, main     | Installe, build et exécute PHPUnit |
| **lint**   | Push / PR sur develop, main     | Vérifie le style via Pint          |
| **deploy** | Push sur master                 | Déploie en production via SSH      |

---

## 📝 Licence

Ce projet est sous licence [MIT](https://opensource.org/licenses/MIT).
EOF
