<?php
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initial.php");

    // save the current pages name to session
    $currPageTitle = "Send Application";

    /**
     * The name submitted on the Guestbook Application page
     */
    $name = $_POST["name"];

    /**
     * The message submitted, awaiting approval to be displayed in the Guestbook
     */
    $message = $_POST["message"];

    // setup trackers 
    $applicationSubmitted = isset($name) && isset($message);
    $messageSent = false;

    if($applicationSubmitted) {
        // save the given name in a cookie, have it expire after 1y, and global across site
        setcookie(NAME_KEY, $name, time() + (60 * 60 * 24 * 365), "/");

        // generate an authentication token for the current submission
        $authToken = bin2hex(random_bytes(16));

        // attempt to send email with given data
        $messageSent = setupAndSendEmail($name, $message, $authToken);
    }
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
        <main class="container mt-3">
            <div class="row">
                <div class="col-md-2 col-lg-3">
                </div>
                <div class="col-md-8 col-lg-6">
                    <?php
                        // if the application was not submitted yet
                        if(!$applicationSubmitted) {
                            // display error, and link to Guestbook application page
                            echo generateMessageWithLink("/php/guestbook-application.php", "Guestbook Application", 
                                                        "Please fill out the form and try again",
                                                        "ERROR: No submission received from Guestbook Application");
                        }

                        // if the application was submitted & the message was sent successfully
                        elseif($applicationSubmitted && $messageSent) {
                            // display success to user, and link to Guestbook page
                            echo generateMessageWithLink("/portfolio/guestbook.php", "Guestbook", 
                                                        "Your application was submitted successfully!");
                                                        
                            // insert given guestbook entry to DB, marked as unpublished (0) by default
                            executeQuery("INSERT INTO GuestbookEntries (Name, Message, SubmissionDate, Token) 
                                            VALUES ('{$name}', '{$message}', '" . date("Y-m-d H:i:s") . "', '{$authToken}')");
                        }

                        // if the application was submitted & message could not be sent
                        elseif($applicationSubmitted && !$messageSent) {
                            // display error, and link to Guestbook page
                            echo generateMessageWithLink("/portfolio/guestbook.php", "Guestbook",
                                                         "Please try again later", 
                                                         "ERROR: Your application could not be submitted at this time");
                        }
                    ?>
                </div>
                <div class="col-md-2 col-lg-3">
                </div>
            </div>
        </main>
    </body>
</html>

<?php 
    /**
     * Generates an HTML email using the given content and attempts to send it to the admin address.
     * Returns whether the email was sent successfully (true/false)
     * @param string $name the name of the person leaving a Guestbook entry
     * @param string $message the message they left behind, awaiting approval
     * @param string $authToken the authentication token used in the "approve entry" link
     * @return bool true if email was sent successfully; otherwise false
     */
    function setupAndSendEmail($name, $message, $authToken) {
        // setup sending and receiving addresses
        $sendToAddress = "";
        $sendFromAddress = "GuestbookApplication@thezalmanian.greenriverdev.com";

        // setup headers for html email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: $sendFromAddress" . "\r\n";
        $subject = "Guestbook Application";

        // generate email content
        $emailContent = setupHtmlEmailContent($subject, $name, $message, $authToken);

        // attempt to send email with given data
        $messageSent = mail($sendToAddress, $subject, $emailContent, $headers);

        // return the result of sending message (success/fail)
        return $messageSent;
    }

    /**
     * Generates and returns HTML content for the approval email using the given data
     * @param string $subject the subject of the email, will be displayed at top of message content
     * @param string $name the name of the person leaving a Guestbook entry
     * @param string $message the message they left behind, awaiting approval
     * @param string $authToken the authentication token used to generate the "approve entry" link
     * @return string HTML content for the email message
     */
    function setupHtmlEmailContent($subject, $name, $message, $authToken) {
        // setup link to approve-entry.php
        $approvalLink = "https://thezalmanian.greenriverdev.com/php/approve-entry.php";
        
        // setup and return HTML email content
        return "<html lang='en'>
                    <head>
                        <title>{$subject}</title>
                    </head>
                    <body>
                        <h3>
                            <i>{$subject}</i>
                        </h3>
                        <h4>
                            " . displayStrong($name . " says:") . " {$message}
                        </h4>
                        <a href='{$approvalLink}?token={$authToken}'>
                            Approve Submission
                        </a>
                    </body>
                </html>";
    }
?>