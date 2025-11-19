#!/bin/sh
set -e

# Run migrations and warm cache if console exists
if [ -f /var/www/html/bin/console ]; then
  php /var/www/html/bin/console doctrine:migrations:migrate --no-interaction || true
  php /var/www/html/bin/console cache:clear --env=prod || true
  php /var/www/html/bin/console cache:warmup --env=prod || true
fi

# Start Apache in foreground
exec apache2-foreground
