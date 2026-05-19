<?php

function createName()
{
  $name = "Nadif"; // Local Scope
}

createName();
echo $name . PHP_EOL; // error
