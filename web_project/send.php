<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'tairWeb');
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $sql = "INSERT INTO tair(email, feedback) values('$email','$feedback')";
    $result = mysqli_query($conn, $sql);
    setcookie('send', 1);
    header('location: index.php');
?>