<?php
    for($x = 0; $x <= 10; $x++) {
        echo $x;
    }

    $x = 14;

    while($x > 0) {
        echo "Number = $x ";
        $x-= 1;
    }
    
    $x =1;

    do{
        echo 'Number ' . $x . '<b>';
        $x++;
    } while($x <= 5);

    $posts = ['First', "Second", "Third"];

    foreach($posts as $i) {
        echo $i . "<b>";
    }

    // Associates array

    $person = [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@yahoolmail.com'
    ];

    foreach($person as $key => $value) {
        echo "$key . $value . <b>";
    }