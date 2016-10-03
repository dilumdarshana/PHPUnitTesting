# PHPUnitTesting

Setup Composer:

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

mv composer.phar /usr/local/bin/composer - For global access

Add dependancy:

php composer.phar require phpunit/phpunit

Setup PhpUnit:

(Direct way)

wget https://phar.phpunit.de/phpunit.phar OR curl -O https://phar.phpunit.de/phpunit.phar

chmod +x phpunit.phar

sudo mv phpunit.phar /usr/local/bin/phpunit

phpunit --version

(Composer way)

php composer.phar require phpunit/phpunit

Run tests:

php vendor/bin/phpunit


Note: Assume that composer.phar installed globally.
