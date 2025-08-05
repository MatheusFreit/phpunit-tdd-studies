<?php

include 'autoloader.php';

$discountCalculator = new discountCalculator();

echo $discountCalculator->apply(200). "\n";