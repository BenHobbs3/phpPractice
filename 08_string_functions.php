<?php
    $string = 'Hello World';

    echo strlen($string);

    // Find the position of the first occurence of a substring in a string
    echo strpos($string, 'o');

    // Find the position of the last occurence of a substring in a string
    echo strrpos($string, 'o');

    // Reverse a string
    echo strrev($string);

    // Convert all characters to lowercase
    echo strtolower($string);

    // Convert all characters to uppercase
    echo strtoupper($string);

    // String Replace
    echo str_replace('World', 'Everyone', $string);

    // Checks if starts with
    if(str_starts_with($string, "Hello")) {
        echo 'Yes it starts with Hello';
    }