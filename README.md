# Drupal 11 Umami Demo Site

This project sets up a Drupal 11 site with the Umami demo profile, providing a fully functional food and restaurant themed website.

## Prerequisites

- PHP 8.1 or higher
- Composer 2.x
- MySQL 8.0 or MariaDB 10.3 or higher
- Web server (Apache or Nginx)
- Node.js and npm (for frontend assets)

## Installation Steps

### 1. Clone the Repository

```bash
git clone git@github.com:shriniyesare/umami-demo.git
cd umami-demo
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Install Drupal with Umami Profile
```bash
# For a clean installation
./vendor/bin/drush site-install umami --account-name=admin --account-pass=admin --site-name="Umami Demo" --site-mail=admin@example.com

# Or if you prefer to use the web installer:
# Access your site in a browser and follow the installation wizard
# Select "Umami" as the installation profile
```