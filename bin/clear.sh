#clear configuration

# first time you need to give permission
# cd bin
# chmod 777 clear.sh

# then you can simply run ./bin/clear.sh

set -e
set -x

php artisan config:clear;
php artisan config:cache;

