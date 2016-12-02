Execute the following commands at the first pull :
<<<<<<< HEAD
composer update
=======
composer update friendsofsymfony/user-bundle
>>>>>>> 4deba15a34ca01145d3a552d4d73769a69a4f7c2
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force