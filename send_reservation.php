<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $guests = htmlspecialchars($_POST['number-guests']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "chickenchips723@gmail.com";
    $subject = "New Reservation from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nGuests: $guests\nDate: $date\nTime: $time\nMessage: $message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Reservation sent successfully!";
    } else {
        echo "There was an error sending the reservation.";
    }
}
?>
