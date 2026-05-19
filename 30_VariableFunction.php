<?php

function foo()
{
  echo "Foo" . PHP_EOL;
}

function bar()
{
  echo "Bar" . PHP_EOL;
}


$functionYangAkanDiPanggil = "foo";
$functionYangAkanDiPanggil();

$functionYangAkanDiPanggil = "bar";
$functionYangAkanDiPanggil();

function sayHello(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
  return "Sample $name";
}

sayHello("Nadif", "sampleFunction");
sayHello("Nadif", "strtoupper");
sayHello("Nadif", "strtolower");
