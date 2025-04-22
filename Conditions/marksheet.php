<?php
$maths = 80;
$english = 85;
$urdu = 70;
$history = 88;
$science = 75;

$totalmarks = 500; 

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