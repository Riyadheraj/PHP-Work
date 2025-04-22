<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- variables -->

<?php
    $id = 1;
    $name = "Areeb";
    $email = "areeb@gmail.com";
    $age = 20;
    
    $id1 = 2;
    $name1 = "Zain";
    $email1 = "zain@gmail.com";
    $age1 = 19;

    $id2 = 3;
    $name2 = "Ali";
    $email2 = "Ali@gmail.com";
    $age2 = 16;

    $id3 = 4;
    $name3 = "Laiba";
    $email3 = "laiba@gmail.com";
    $age3 = 18;

    $id4 = 5;
    $name4 = "Faiza";
    $email4 = "faiza@gmail.com";
    $age4 = 17;


?>
    
    <table border="2" cellpadding="9">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Age</td>
        </tr>
        
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $age ?></td>
            
        </tr>

        <tr>
            <td><?php echo $id1 ?></td>
            <td><?php echo $name1 ?></td>
            <td><?php echo $email1 ?></td>
            <td><?php echo $age1 ?></td>
            
        </tr>

        <tr>
            <td><?php echo $id2 ?></td>
            <td><?php echo $name2 ?></td>
            <td><?php echo $email2 ?></td>
            <td><?php echo $age2 ?></td>
            
        </tr>

        <tr>
            <td><?php echo $id3 ?></td>
            <td><?php echo $name3 ?></td>
            <td><?php echo $email3 ?></td>
            <td><?php echo $age3 ?></td>
            
        </tr>

        <tr>
            <td><?php echo $id4 ?></td>
            <td><?php echo $name4 ?></td>
            <td><?php echo $email4 ?></td>
            <td><?php echo $age4 ?></td>
            
        </tr>
              
 </table>
</body>
</html>