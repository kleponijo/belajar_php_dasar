<?php

function sayHello($firstName, $lastName = "")
{
  echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Nadif");
sayHello("Budi");
sayHello("Nadif", "Zidan");
