Installation
============

The Silex bootstrapping process requires the following software (minimum versions):

 * PHP 5.3.2
 * Apache 2.2.16

Clone the repository using:

    git://github.com/pwaring/silex-bootstrap.git

Then run the install.sh script in the root directory.

In order for the frontend controller to work, you need to add the following directive to the Directory section of your virtual host:

FallbackResource /index.php
