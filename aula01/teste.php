<?php

include 'autoloader.php';
include 'calculadoradesconto.php';

$dicoutCalculator = new DiscountCalculator();
echo $dicoutCalculator->apply(value:100)."\n";

?>