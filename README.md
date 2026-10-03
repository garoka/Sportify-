# Sportify

Web application built with **Symfony (PHP)** for [décris le but : gestion de sport, réservation, suivi...], developed as a 3rd-year academic project at **ESPRIT**.

## Features

- [Fonctionnalité 1, par exemple authentification et gestion des utilisateurs]
- [Fonctionnalité 2, par exemple gestion des activités / séances / équipes]
- [Fonctionnalité 3, par exemple réservation ou tableau de bord]
- Back-office / interface d'administration (à confirmer)

## Tech stack

- **Back-end:** Symfony, PHP, Doctrine ORM
- **Front-end:** Twig, HTML, CSS, JavaScript (Bootstrap à confirmer)
- **Database:** MySQL
- **Tools:** Composer, Symfony CLI, Git

## Prerequisites

- PHP 8.1 or higher
- Composer
- MySQL (XAMPP, WAMP or standalone)
- Symfony CLI (optional but recommended)

## Installation

```bash
# 1. Clone the repository
git clone https://github.com/garoka/<nom-du-depot>.git
cd <nom-du-depot>

# 2. Install dependencies
composer install
```

## Configuration

Create a `.env.local` file at the root of the project and set your database connection:

```env
DATABASE_URL="mysql://root:@127.0.0.1:3306/sportify?serverVersion=8.0&charset=utf8mb4"
```

Then create the database and the tables:

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

## Run the project

```bash
symfony server:start
```

Open `http://127.0.0.1:8000` in your browser.

Without the Symfony CLI:

```bash
php -S 127.0.0.1:8000 -t public
```

## Project structure

```
.
├── config/        # Application configuration
├── migrations/    # Database migrations
├── public/        # Public entry point (index.php, assets)
├── src/
│   ├── Controller/
│   ├── Entity/
│   └── Repository/
├── templates/     # Twig views
└── composer.json
```

## Screenshots

_Ajoute ici des captures d'écran de l'application, par exemple :_

```md
![Home page](screenshots/home.png)
```

## Author

**Oussama Saidani** - Full-Stack & DevOps Engineering student at ESPRIT
GitHub: [garoka](https://github.com/garoka)
