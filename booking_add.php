<?php
    include 'conn.php';

    if(isset($_POST['submit'])){
        $package_id = $_POST['package_id'];
        $booking_fullname = $_POST['booking_fullname'];
        $booking_passenger = $_POST['booking_passenger'];
        $booking_date = $_POST['booking_date'];
        $booking_status = $_POST['booking_status'];

        $sql = "INSERT INTO booking (package_id, booking_fullname, booking_passenger, booking_date, booking_status) VALUES ('$package_id','$booking_fullname', '$booking_passenger', '$booking_date', '$booking_status')";
        if($conn->query($sql)){
            $_SESSION['success'] = 'Booking Added!';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }
    }   
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }

    header('location: index.php');

?>