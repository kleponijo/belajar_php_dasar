<?php

$sayHello = function (String $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("Nadif");
$sayHello("Budi");

function sayGoodBye(String $name, $filter)
{
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

sayGoodBye("Nadif", function ($name): String {
  return strtoupper($name);
});

$filterFunction = function ($name): String {
  return strtoupper($name);
};

sayGoodBye("Nadif", $filterFunction);


$firstName = "Nadif";
$lastName = "Zidan";

$fullName = function () use ($firstName, $lastName) {
  echo "Hello $firstName $lastName" . PHP_EOL;
};

$fullName();

$firstName = "Budi";
$lastName = "Nugraha";
$fullName();
