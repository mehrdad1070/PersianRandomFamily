<?php
    $name = explode( PHP_EOL ,file_get_contents("data/name.txt")) ;
    $name = $name[rand(0 , sizeof($name) - 1 )];

    $family = explode( PHP_EOL ,file_get_contents("data/family.txt")) ;
    $family = $family[rand(0 , sizeof($family) - 1 )];


    if (isset($_GET["m"]) and  $_GET["m"] == "json"){
        header('Content-Type: application/json');
        echo json_encode(array("name" => $name , "family" => $family));
    }else{
        echo "$name $family" ;
    }

