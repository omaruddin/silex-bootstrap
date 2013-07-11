#!/bin/bash

mkdir -p web/assets/bootstrap/
mkdir -p web/assets/jquery/

curl -s http://getcomposer.org/installer | php
php composer.phar install


