<?php
$firstName = "Nadif";
$lastName = "Zidan";

$anonymousFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;
echo $anonymousFunction();
