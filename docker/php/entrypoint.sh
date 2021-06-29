#!/bin/sh
set -e

# Step 0: Clear and warm the cache
./bin/console cache:clear

# Step 1: Create the database (if needed)
./bin/console doctrine:database:create --no-interaction --if-not-exists

# Step 2: Run any outstanding migrations (if needed)
./bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration --all-or-nothing

exec "$@"
