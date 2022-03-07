<?php
    $_server = "localhost";
    $_username = "root";
    $_password = "";
    $db = "php_form";

    $con = mysqli_connect($_server, $_username, $_password, $db);

    if(!$con){
        die ("Connection failed");
    }
    // echo "connection successful";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `details`(`name`, `age`, `gender`, `email`, `phone`, `message`, `date`) VALUES ('$name','$age','$gender','$email','$phone','$message',current_timestamp());";
        $result = mysqli_query($con, $sql);
    }

    if($result){
        echo "data inserted successfully";
    }
    else{
        echo "Not inserted";
    }



?>