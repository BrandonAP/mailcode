<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mail</title>
</head>
<body>
    <?php 
        $mailto = 'user@example.com';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = $mailto;
        $email_body = "Message sent from yoursite.com: \n $message";
        $headers = "From: $email";

        mail($to, $name, $email_body, $headers);
        echo "Message sent";
        echo "<script>setTimeout(\"location.href='https://yoursite.com/'\",420)</script>";
    ?>
</body>
</html>
