<?php
    $fruits = ['apple', 'orange', 'pear'];
    
    // Get Length
    echo count($fruits);

    // Search Array
    var_dump(in_array('apple', $fruits)); // checks for item in array
    
    // Add to Array
    array_push($fruits, "banana");
    array_push($fruits, "blueberry", "strawberry"); // inserts multiple elements to list
    array_unshift($fruits, 'mango'); // pushes element to the front
    
    foreach($fruits as $i) {
        echo($i . '<br>');
    }

    // Remove from Array
    unset($fruits[2]);

    // Prints Array
    print_r($fruits);

    // Merging Arrays
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1,$arr2);

    echo("<br>");
    print_r($arr3);
    echo("<b>");
    $arr4 = [...$arr1, ...$arr2];

    print_r($arr4);

    // Combining two Arrays (This matches the color to the veggie)
    $arr5 = ["green", "orange", "red"];
    $arr6 = ["cucumber", "carrot", "tomato"];

    $c = array_combine($arr5, $arr6);
    // To flip it, do array_flip()
    print_r($c);

    

    $numbers = range(1,20);

    $newNumbers = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);       // this takes in the function(number) as well as the array $numbers
    