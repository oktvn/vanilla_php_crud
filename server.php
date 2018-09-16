<?php

    $name = '';
    $address = '';
    $id = 0;

$db = mysqli_connect('127.0.0.1', 'root', 'password', 'crud');

// If save btn is clicked

if(isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    
    $query = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
    mysqli_query($db, $query);
    header('location: index.php'); // redirect to index after insertion
}

// retrieve records

$results = mysqli_query($db, "SELECT * FROM info");
?>