# SymfonyPlayground
PHP Symfony Walkthrough and Playground

# Setup
- composer install
- app/config/parameters.yml (default for now)
- in web/app_dev.php uncommented block umask(0000);
- chmod -R /var/*
- XAMPP Apache Config Local Directory
- htdocs/project/web
- php.ini short_open_tag = off
- php bin/console cache:clear --env=prod --no-debug
  -- Running "live" with Apache

