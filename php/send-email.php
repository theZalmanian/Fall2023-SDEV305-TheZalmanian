<?php
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initial.php");

    // save the current pages name to session
    $currPageTitle = "Send Application";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            // include standard header metadata
            require_once(LAYOUTS_PATH . "/standard-page-metadata.php"); 
        ?>
    </head>
    <body>
        <main class="mt-3">
            <?php
                // setup variables and check that all required inputs were 
                // submitted on the Guestbook Application form
                $name = $_POST["name"];
                $message = $_POST["message"];

                if( isset($name) && isset($message) ) {
                    // setup sending and receiving addresses
                    $sendToAddress = "";
                    $sendFromAddress = "GuestbookApplication@thezalmanian.greenriverdev.com";

                    // setup headers for html email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: $sendFromAddress" . "\r\n";

                    $subject = "Guestbook Application";

                    // attempt to send email with given data
                    $messageSent = mail($sendToAddress, $subject, setupEmailContent($name, $message), $headers);

                    // if the message was sent
                    if($messageSent) {
                        // display success to user
                        echo generateMessageWithLink("/portfolio/guestbook.php", "Guestbook", 
                                                     "Your application was submitted successfully!");

                        // insert given guestbook entry to DB, as unpublished
                        executeQuery("INSERT INTO GuestbookEntries (Name, Message, Published) 
                                        VALUES ('{$name}', '{$message}', '0')");

                    }

                    // if the message was not sent, display error 
                    else {
                        echo generateMessageWithLink("/portfolio/guestbook.php", "Guestbook",
                                                     "Please try again later", 
                                                     "ERROR: Your application could not be submitted at this time");
                    }
                }  
                
                // otherwise display error and link to Guestbook Application form
                else {                
                    echo generateMessageWithLink("/php/guestbook-application.php", "Guestbook Application", 
                                                 "Please fill out the form and try again",
                                                 "ERROR: No submission received from Guestbook Application");
                }
            ?>
        </main>
    </body>
</html>

<?php 
    /**
     * Generates and returns HTML content for the email using the given data
     * @param string $name the name of the person sending the message
     * @param string $email the email address of the person sending the message
     * @param string $message the message being sent by email
     * @return string HTML content for the email message
     */
    function setupEmailContent($name, $message) {
        // setup most of email content
        $emailContent = "<html lang='en'>
                            <head>
                                <title>Guestbook Application</title>
                            </head>
                            <body>
                                <h3>
                                    <i>Guestbook Application</i>
                                </h3>
                                <p>
                                    {$message}
                                </p>
                                <p>
                                    Sincerely,
                                    <br>
                                    {$name}
                                </p>
                            </body>
                        </html>";

        // return the generated email content
        return $emailContent;
    }
?>