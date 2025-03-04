<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);

$names[0] = "Agus";
var_dump($names);

$names[] = "Dede";
var_dump($names);

unset($names[1]);
var_dump($names);

var_dump(count($names));


#perubahan
$data = array (
    "nama : " => "Zanni",
);
var_dump($data);