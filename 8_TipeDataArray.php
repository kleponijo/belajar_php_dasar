<?php

$values = array(10, 9, 5, 2.3);
var_dump($values);

$names = ["Nadif", "Zidan", "Tazaka"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

$nadif = array(
  "id" => "Nadif",
  "name" => "Zidan Tazaka",
  "age" => 20,
  "address" => array(
    "city" => "Banyuwangi",
    "country" => "Indonesia",
  ),
);
var_dump($nadif);
var_dump($nadif["name"]);
var_dump($nadif["address"]["city"]);

$budi = [
  "id" => "Budi",
  "name" => "Budi Nugraha",
  "age" => 30,
  "address" => [
    "city" => "Jakarta",
    "country" => "Indonesia",
  ],
];
var_dump($budi);
var_dump($budi["name"]);
var_dump($budi["address"]["city"]);
