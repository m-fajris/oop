<?php

require_once 'animal.php';

$sheep = new Animal("shaun");

echo $sheep->name .'<br>';  // "shaun"
echo $sheep->legs .'<br>'; // 2
echo $sheep->cold_blooded; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())


?>