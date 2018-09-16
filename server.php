<?php
    session_start();
    $name = '';
    $address = '';
    $id = 0;
    $edit_state = false;

$db = mysqli_connect('127.0.0.1', 'root', 'password', 'crud');

// If save btn is clicked

if(isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    
    $query = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
    $_SESSION['msg'] = "Address saved";
    mysqli_query($db, $query);
    header('location: index.php'); // redirect to index after insertion
}

// retrieve records

$results = mysqli_query($db, "SELECT * FROM info");


// update

if(isset($_POST['update'])) {
    $name = mysql_real_escape_string($_POST['name']);
    $address = mysql_real_escape_string($_POST['address']);
    $id = mysql_real_escape_string($_POST['id']);
}
?>