<?php
require "./vendor/autoload.php";

use App\DisplayNumber;
use App\SortNumber\DescSort;
use App\SortNumber\AscSorter;
use App\DisplayStyle\CommaStyle;
use App\DisplayStyle\ColumnStyle;

$numberes 	   = array(8, 3, 5, 2, 7, 9, 4, 10, 15);
$sorter    	   = new DescSort();
$formater      = new ColumnStyle();
$displayNumber = new DisplayNumber($sorter, $formater);
$numberes 	   = $displayNumber->display($numberes);
echo $numberes;