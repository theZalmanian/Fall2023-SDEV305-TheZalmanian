<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>Your message was sent successfully</h1>
        <?php
        $name = $_POST["name"];
        $email = "From: " . $_POST["email"];
        $message = $_POST["message"];

        $developmentAddress = "DEVELOPER EMAIL";

        mail($developmentAddress,"Portfolio Contact", $message, $email);
        ?>
    </body>
</html>