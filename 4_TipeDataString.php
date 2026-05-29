<?php

echo 'Name : ';
echo 'Nadif Zidan Tazaka';
echo "\n";

echo "Name : ";
echo "Nadif\t Zidan\t Tazaka\n";

echo <<<NADIF
Selamat belajar PHP
sekarang, kita belajar tipe data String
ini adalah cara ke-3 membuat String
bisa "menggunakan" heredoc

NADIF;

echo <<<'NADIF'
Selamat belajar PHP
sekarang, kita belajar tipe data String
ini adalah cara ke-3 membuat String
bisa "menggunakan" nowdoc
NADIF;
