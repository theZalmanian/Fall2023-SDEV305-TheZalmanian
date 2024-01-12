<?php 
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initial.php");

    // save the current pages name to session
    $currPageTitle = "Guestbook";
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
        // display site navigation
        require_once(LAYOUTS_PATH . "/navigation.php");
    ?>
    <main class="container">
        <div class="row">
            <div class="col-md-2 col-lg-3">
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="row">
                    <?php
                        // link to guestbook application page
                        echo generateMessageWithLink("../php/guestbook-application.php", "Guestbook Application",
                                                     "Want to leave a guestbook entry? 
                                                      <br> 
                                                      Submit an application on the page linked below!");
                    
                        // get all guestbook entries in DB marked as published, latest entries first
                        $result = executeQuery("SELECT * 
                                                FROM GuestbookEntries
                                                WHERE Published = TRUE
                                                ORDER BY SubmissionDate DESC");

                        // run through all returned entries
                        while($currEntry = mysqli_fetch_assoc($result)) {
                            // display the current entry
                            echo generateGuestbookEntryDisplay($currEntry["Name"]
                                                                , $currEntry["SubmissionDate"]
                                                                , $currEntry["Message"]);
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-2 col-lg-3">
            </div>
        </div>
    </main>
</body>
</html>

<?php
    /**
     * Generates and returns a Bootstrap Card containing the given Guestbook Entry data
     * @param string $name The name of the individual that submitted the Guestbook Entry
     * @param string $submissionDate The date the entry application was submitted on
     * @param string $message The contents of the Guestbook Entry
     * @return string a Bootstrap Card containing the given Guestbook Entry data
     */
    function generateGuestbookEntryDisplay($name, $submissionDate, $message) {
        // get how many days ago the entry was submitted
        $daysAgo = calculateDifferenceInDays($submissionDate);

        // generate and return a display card using the given ata
        return "<div class='card col-12 mx-1 mx-md-0 mb-3 p-3'>
                    <h4>" 
                        . displayStrong($name) . "left a message {$daysAgo} days ago
                    </h4>
                    <p class='m-0'>
                        <i>{$message}</i>
                    </p>
                </div>";
    }

    /**
     * Calculates and returns the difference between the current and given date in days
     * @param string $date A string representing the date being compared to today's date
     * @return string the number of days difference between the given date and today's date
     */
    function calculateDifferenceInDays($date) {
        // convert the given string to a DateTime object
        $previousDate = new DateTime($date);

        // get the current date and time
        $currentDate = new DateTime();

        // calculate the difference between the two dates
        $difference = $currentDate -> diff($previousDate);

        // extract and return the number of days from the difference
        return $difference -> days;
    }
?>