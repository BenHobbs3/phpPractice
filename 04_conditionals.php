<?php
/*
<, > 
== Equal to
=== Identical to
!= Not Equal to
!== Not Identical to
*/
$age = 20;

if($age > 19) {
    echo "You can vote";
}
else {
    echo "You cannot vote :(";
}

// Date function example
$t = date("H");

if($t < 12) {
    echo 'Good Morning';
}
elseif($t < 17) {
    echo "Good Afternoon";
}
else {
    echo "Good Evening";
}