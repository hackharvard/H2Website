<?php

// Copyright, Jason Herrmann, June 5th, 2015

// first, create/open a file
$file = fopen("../results/signups.txt", "a");

// second, validate user input from $_POST form
if (preg_match("/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i", $_POST["email"])){
        
    // third, add to file
    fwrite($file, $_POST["email"].",\n");
    header("Location: ../thanks.html");
    
} else {
 
    header("Location: ../emailError.html");
    
}

fclose($file);
?>