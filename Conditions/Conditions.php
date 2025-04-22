<?php

// If Statement
$name = "Ali";
$email = "ali@gmail.com";

if($name == "zain"){
    echo "Welcome to class <br>";
}
else{
    echo "Not matched <br>";
}

// Else if statement

$food = "Biryani";

if($food == "Karahi"){
    echo "Yes karahi is available <br>";
}

elseif($food == "Biryani"){
    echo "Yes biryani is available <br>";
}

elseif($food == "Zinger"){
    echo "Yes zinger is available <br>";
}


else{
    echo "Not availablle <br>";
}

// Nested If else Statement

$nationality = "Pakistani";
$age = 19;

if($nationality == "Pakistani"){
    if($age >= 18){
        echo "You are eligible for vote";
    }
    else{
        echo "Only allow 18 or above";
    }
}
else{
    echo "You are not eligible for vote";
}

$color = "Black";

if($color == "Red"){
    echo "<br> Red Color Matched";
}
elseif($color == "Blue"){
    echo "<br> Blue Color Matched";
}
elseif($color == "Orange"){
    echo "<br> Orange Color Matched";
}

elseif($color == "Black"){
    echo "<br> Black Color Matched";
}
elseif($color == "Green"){
    echo "<br> Green Color Matched";
}
else {
    echo "Not matched";
}

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

$maths = 80;
$english = 85;
$urdu = 70;
$history = 88;
$science = 75; 

$totalmarks = 500

$obtainedmarks = $maths + $english + $urdu + $history + $science;

$percentage = ($obtainedmarks / $totalmarks) * 100;

if ($percentage >= 90) {
    $grade = "A+";
} elseif ($percentage >= 80) {
    $grade = "A";
} elseif ($percentage >= 70) {
    $grade = "B";
} elseif ($percentage >= 60) {
    $grade = "C";
} elseif ($percentage >= 50) {
    $grade = "D";
} else {
    $grade = "Fail";
}


echo "<br> Total Marks: $totalmarks <br>";
echo "Obtained Marks: $obtainedmarks <br>";
echo "Percentage: $percentage% <br>";
echo "Grade: $grade";



?>