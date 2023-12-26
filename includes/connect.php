<?php

$con=mysqli_connect('localhost', 'root', '', 'shoecommerce');

if($con){
    echo "Connection succesful";
}else{
    die(mysqli_error($con));
}

?>