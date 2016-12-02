Execute the following commands at the first pull :
composer update
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force