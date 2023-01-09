<?php

$conn = mysqli_connect('localhost' , 'ali' , 'test123' , 'alicode_pizza');

//  $conn = mysqli_connect('localhost' , 'ali' , 'test123' , 'alicode_pizza');

    if (!$conn) {
        echo 'connection error' . mysqli_connect_error();
    }





?>