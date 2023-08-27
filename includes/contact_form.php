<?php

    session_start();

    include "db.php";

    if(isset($_POST['contact_btn'])){
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $message = mysqli_real_escape_string($connection, $_POST['message']);

        $insert = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

        $insert_query = mysqli_query($connection, $insert);

        if ($insert_query) {

            $_SESSION['status'] = "Thank you ".$name." for contacting us";

            header("location: ../contact.php");
            echo "true";
        } else {
            echo "false";
        }
    }

?>