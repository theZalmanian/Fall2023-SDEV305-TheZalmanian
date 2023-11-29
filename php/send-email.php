<?php
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initial.php");

    // save the current pages name to session
    $currPageTitle = "Send Message";
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
        <?php
            // setup variables to hold Contact form inputs
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // check that all required inputs were submitted on the Contact form
            if( isset($name) && isset($email) && isset($message) ) {
                // setup sending and receiving addresses
                $sendToAddress = "";
                $sendFromAddress = "PortfolioContact@greenriverdev.com";

                // setup headers for html email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: $sendFromAddress" . "\r\n";

                $subject = "Portfolio Contact";

                // attempt to send email with given data
                $messageSent = mail($sendToAddress, $subject, setupEmailContent($name, $email, $message), $headers);

                // if the message was sent, display success 
                if($messageSent) {
                    echo displayMessage("Your message was sent successfully!");
                }

                // if the message was not sent, display error 
                else {
                    echo displayMessage("ERROR: Your message could not be sent at this time", "Please try again later");
                }
            }  
            
            // otherwise display error and link to contact form
            else {                
                echo displayMessageWithLink("/portfolio/contact.php", "Contact Me", 
                                            "ERROR: No submission received from Contact Form", 
                                            "Please fill out the form and try again");
            }
        ?>
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
    function setupEmailContent($name, $email, $message) {
        // setup most of email content
        $emailContent = "<html lang='en'>
                        <head>
                            <title>Portfolio Contact</title>
                        </head>
                        <body>
                            <h3>
                                <i>Portfolio Contact</i>
                            </h3>
                            <h4>
                                From: {$email}
                            </h4>
                            <p>
                                {$message}
                            </p>
                            <p>
                                Sincerely,
                                <br>
                                {$name}
                            </p>
                        </ul>
                        </body>
                        </html>";

        // return the generated email content
        return $emailContent;
    }
?>