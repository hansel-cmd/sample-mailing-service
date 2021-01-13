<?php

    if (isset($_POST['submit'])) {
        
        $name = $_POST['name'];
        $from = $_POST['email'];
        $message = $_POST['message'];
        $to = $_POST['to'];


        $headers = "From: $from";

        
        if (mail($to, "Form Submission", $message, $headers)) {
            echo "form submitted";
        } else {
            echo "error";
        }

        


    } else {
        header('Location: index.html');
    }
?>