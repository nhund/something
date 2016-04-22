<?php
require "./vendor/autoload.php";

use Test\Generator;

$generator = new Generator();
//print result
print_r($generator->run(10));