#!/bin/bash

sudo apt install -y php php-cli unzip curl docker docker-compose php-mbstring php-dom &&
  mkdir -p vendor/bin &&
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" &&
  php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" &&
  php composer-setup.php --install-dir=vendor/bin --filename=composer &&
  php -r "unlink('composer-setup.php');" &&
  sudo chmod 666 /var/run/docker.sock &&
  ./vendor/bin/composer install &&
  ./vendor/bin/sail build --no-cache