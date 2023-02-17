<?php
    require('connection.php');
    session_start();
    isset($_POST['name']);
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($con, $name);

    isset($_POST['mobile']);
    $Mob = stripslashes($_REQUEST['mobile']);
    $Mob = mysqli_real_escape_string($con, $Mob);

    isset($_POST['address']);
    $address = stripslashes($_REQUEST['address']);
    $address = mysqli_real_escape_string($con, $address);

    isset($_POST['message']);    
    $message = stripslashes($_REQUEST['message']);
    $message = mysqli_real_escape_string($con, $message);

        $query    = "INSERT INTO `contact` (`name`, `Mob`, `address`, `message`) VALUES ('$name', '$Mob', '$address', '$message')";
        if (mysqli_query($con, $query)) {
            echo '<script>';
            echo 'alert("Message Send Successfully");';
            echo 'location = "index.html";';
            echo '</script>';
        }else{
            echo '<script>';
            echo 'alert("Sorry !! Try Again");';
            echo 'location = "index.html";';
            echo '</script>';
        }
?>  