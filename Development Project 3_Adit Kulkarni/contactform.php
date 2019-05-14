<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$reason = $_POST['reason'];
$message = $_POST['message'];

$conn = mysqli_connect("localhost", "root", "admin", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query_response = "INSERT INTO contactinfo (User_Name, Email_Id, Phone_number, Subject, Reason, Message)
VALUES ( '$name', '$email', '$phone', '$subject', '$reason', '$message')";

if ($conn->query($query_response) === TRUE) {
    
} else {
    echo "Error: " . $query_response . "<br>" . $conn->error;
}

$conn->close();

$feedbackformcontent=" From: $name \n Email: $email \n Phone: $phone \n Subject: $subject \n Reason: $reason \n Message: $message";
$recipient = "aditkulkarni.12@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $feedbackformcontent, $mailheader) or die("Error in sending Email!");
echo "Thank You! Details uploaded and sent successfully to Adit Kulkarni " . " -" . "<a href='ContactMe.php'> You May click here to go back to previous page.</a>";
?>