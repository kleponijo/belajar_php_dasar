<?php

$nilai = "E";

switch ($nilai) {
  case "A":
    echo "Selamat anda lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda tidak lulu" . PHP_EOL;
    break;
  default:
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}

switch ($nilai):
  case "A":
    echo "Selamat anda lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda tidak lulu" . PHP_EOL;
    break;
  default:
    echo "Mungkin anda salah jurusan" . PHP_EOL;
endswitch;
