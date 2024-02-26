<?php
    include 'conn.php';

    if(isset($_POST['submit'])){
        $inquiry_id = $_POST['inquiry_id'];
        $inquiry_name = $_POST['inquiry_name'];
        $inquiry_email = $_POST['inquiry_email'];
        $inquiry_phone = $_POST['inquiry_phone'];
        $inquiry_date = $_POST['inquiry_date'];
        $inquiry_adult = $_POST['inquiry_adult'];
        $inquiry_kid = $_POST['inquiry_kid'];
        $inquiry_message = $_POST['inquiry_message'];
        $inquiry_status = $_POST['inquiry_status'];

        $sql = "INSERT INTO inquiry (inquiry_id, inquiry_name, inquiry_email, inquiry_phone, inquiry_date, inquiry_adult, inquiry_kid, inquiry_message, inquiry_status) VALUES ('$inquiry_id','$inquiry_name', '$inquiry_email', '$inquiry_phone', '$inquiry_date', '$inquiry_adult', '$inquiry_kid', '$inquiry_message', '$inquiry_status')";
        if($conn->query($sql)){
            $_SESSION['success'] = 'Book Successfully Create!';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }
    }   
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }

    header('location: booking.php');

?>