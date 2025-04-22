<?php
// Nested if

$name = "Ali";
$email = "ali@gmail.com";
$password = "12345";
$confirm_password = "12345";

if ($email == "ali@gmail.com") {
    if ($password == "12345") {
        if ($confirm_password == $password) {
            echo " <br> Welcome, $name! Your information has been verified successfully.";
        } else {
            echo "Confirm password does not match.";
        }
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "Invalid email.";
}
?>