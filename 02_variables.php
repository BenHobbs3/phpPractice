<?php
    $name = "Brad"; //string
    $age = 40; // int
    $tf = true; // bool
    $money = 20.75; // float

    echo $name . ' is ' . $age . ' years old';
    echo "$name is $age years old"; // this way is better for concatenating

    //constants
    define("Host", 'localhost');
    define('DB_NAME', 'dev_db');