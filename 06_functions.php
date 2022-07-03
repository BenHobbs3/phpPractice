<?php
    function registerUser() {
        $x = 10; // you can make this appear outside function scope with global
        echo 'User registered';
        return($x);
    }


    //registerUser();

    function square($x) {
        return($x*$x);
    }

    echo square(15);

