<?php

function factorialRecursive(int $value): int
{
  if ($value == 1) {
    return 1;
  } else {
    return $value * factorialRecursive($value - 1);
  }
}

var_dump(factorialRecursive(5));

function loop(int $value)
{
  if ($value == 0) {
    echo "End loop" . PHP_EOL;
  } else {
    echo "Loop-$value" . PHP_EOL;
    loop($value - 1);
  }
}

loop(3000000);
