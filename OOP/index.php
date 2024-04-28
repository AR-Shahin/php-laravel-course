<?php

use App\Model\User;
use App\Model\Admin;
use NumberToWords\NumberToWords;

require "./vendor/autoload.php";


// new User();
// new Admin();

$numberToWords = new NumberToWords();
$numberTransformer = $numberToWords->getNumberTransformer('en');
echo $numberTransformer->toWords(100);

ars();