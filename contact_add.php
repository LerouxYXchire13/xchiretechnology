<?php
    include 'conn.php';

    if(isset($_POST['submit'])){
        $contact_id = $_POST['contact_id'];
        $contact_name = $_POST['contact_name'];
        $contact_email = $_POST['contact_email'];
        $contact_phone = $_POST['contact_phone'];
        $contact_message = $_POST['contact_message'];

        $sql = "INSERT INTO contact (contact_id, contact_name, contact_email, contact_phone, contact_message) VALUES ('$contact_id','$contact_name', '$contact_email', '$contact_phone', '$contact_message')";
        if($conn->query($sql)){
            $_SESSION['success'] = 'Contact Successfully Send!';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }
    }   
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }

    header('location: contact.php');

?>