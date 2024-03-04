<?php

include "config.php";



    $name = $_POST['NAME'];

    $email = $_POST['EMAIL'];

    $subject = $_POST['SUBJECT'];

    $message = $_POST['MESSAGE'];

    

    $sql = "INSERT INTO `messages`(`name`, `email`, `subject`, `message`) 

           VALUES ('$name','$email','$subject','$message')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Message saved.";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
</head>
<body>
    <p><br></p>
    <a href="index.php">
        <button>portfolio</button>
    </a>
</body>
</html>

