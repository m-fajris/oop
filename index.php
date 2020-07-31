<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");

echo $sheep->name .'<br>';  // "shaun"
echo $sheep->legs .'<br>'; // 2
echo $sheep->cold_blooded; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

?>