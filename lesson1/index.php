<?php
require "./vendor/autoload.php";

use App\DisplayNumber;

$displayNumber = new DisplayNumber();

$numberes = array(8, 3, 5, 2,7, 9, 4, 10, 15);
$numberes = $displayNumber->display($numberes);
echo $numberes. "\n";