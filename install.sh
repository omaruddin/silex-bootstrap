#!/bin/bash

mkdir -p web/assets/css/bootstrap/
mkdir -p web/assets/js/jquery/

curl -s http://getcomposer.org/installer | php
php composer.phar install


