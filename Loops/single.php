<?php
// Single Dimensional Array
// Associative Array

// $data = ['Name' => "ali", 'Email' => "ali@gmail.com", 'Age' => 18];

// all values in array
// foreach ($data as $key => $value){
//     echo "<b>". $key. ": </b>" . $value . "<br>";
// }

// single values in array

// echo $data ['Age']. "<br>". $data['Email'];



// Structure of array

// echo "<pre>";
// var_dump ($data);
// print_r($data);
// echo "</pre>";


// Multidimensional array
// 1 . Index Array

// $data = [
//     ["zain", "zain@gmail.com", 19],
//     ["ali", "ali@gmail.com", 20],
//     ["raheel", "raheel@gmail.com", 14],
//     ["mehdi", "mehdi@gmail.com", 17]
// ];

// Singles Values

// echo $data[2][0]. "<br>". $data[0][1];

// For Each

// foreach($data as $value){
//     foreach($value as $value2){
//         echo "<b style = 'color: blue;' >" . $value2 . "<br>";
//     }
// }

// echo "<pre>";
// // var_dump($data); 
// print_r($data);
// echo "</pre>";


// 2. Associative Array

$data = [
    ['Name' => "zain",'Email' => "zain@gmail.com",'Age'=> 19, 'Color' => "blue"],
    ['Name' => "ali",'Email' => "ali@gmail.com",'Age'=> 17, 'Color' => "green"],
    ['Name' => "raheel",'Email' => "raheel@gmail.com",'Age'=> 20, 'Color' => "yellow"],
    ['Name' => "mehdi",'Email' => "mehdi@gmail.com",'Age'=> 16, 'Color' => "red"],
];

// Singles Values
// echo $data[0]['Name'];

// For Each

foreach($data as $value){
    foreach($value as $key=> $value2){
        echo $key. ":" . $value2 . "<br>";
    }
}

?>
