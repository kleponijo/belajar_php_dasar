<?php

function increment()
{
  static $counter = 1; // static Scope
  echo "counter = $counter" . PHP_EOL;
  $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();
