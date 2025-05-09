<?php
// global variable
$a = 10;

function add(){
    // using global variable
    global $a;
    echo $a + 10;
}
add(); // This will output 20

// function uses global variable
function subtract(){
    // using global variable
    global $a;
    echo $a - 5;
}
subtract(); // This will output 5
?>