# Umami Demo

This is a Drupal project based on the Umami demo profile.

## Setup

1. Clone the repository
2. Run `composer install`
3. Set up your database
4. Install Drupal using the Umami demo profile

## Development

This project uses the standard Drupal project structure with:
- `docroot/` - Drupal webroot
- `vendor/` - Composer dependencies
- `composer.json` - Project dependencies
- `config/sync/` - Drupal configuration files

## Modules

Currently installed contrib modules:
- Paragraphs
- Pathauto
- Token
- **Shield** - HTTP Basic Authentication protection for the site

## Shield Module

The [Drupal Shield module](https://www.drupal.org/project/shield) provides HTTP Basic Authentication to protect the site from unauthorized access. This is particularly useful for staging/development environments.

### Enabling Shield

After running `composer install`, enable the Shield module using Drush:

```bash
drush en shield -y
```

### Configuring Shield

Configure Shield credentials via the Drupal Admin UI at `/admin/config/system/shield` or via Drush:

```bash
# Set username
drush config-set shield.settings user YOUR_USERNAME -y

# Set password
drush config-set shield.settings pass YOUR_PASSWORD -y

# Enable Shield protection
drush config-set shield.settings shield_enable true -y

# Clear cache
drush cr
```

### Security Notes

- **Never commit real credentials to version control**
- Override Shield credentials in `docroot/sites/default/settings.php` or via environment variables for production environments
- The default configuration (`config/sync/shield.settings.yml`) has Shield disabled (`shield_enable: false`) with empty credentials
- CLI access (Drush) is allowed by default (`allow_cli: true`) to prevent locking out deployments
