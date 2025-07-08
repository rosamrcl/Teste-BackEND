<?php

include 'autoloader.php';
include 'DiscountCalculator.php';

$dicoutCalculator = new DiscountCalculator();
echo $dicoutCalculator->apply(value:100)."\n";

?>