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
                <?php
                    // link to guestbook application page
                    echo generateMessageWithLink("/php/guestbook-application.php", "Guestbook Application",
                                                 "Want to leave a guestbook entry? <br> Submit an application on the page linked below!");
                
                    // get all guestbook entries in DB marked as published
                    $result = executeQuery("SELECT * 
                                            FROM GuestbookEntries
                                            WHERE Published = TRUE
                                            ORDER BY SubmissionDate DESC");

                    // run through all returned entries
                    while($currEntry = mysqli_fetch_assoc($result)) {
                        echo generateGuestbookEntryDisplay($currEntry["Name"], $currEntry["SubmissionDate"], $currEntry["Message"]);
                    }
                ?>
            </div>
            <div class="col-md-2 col-lg-3">
            </div>
        </div>
    </main>
        
    <?php echo generateGreetingToast(); ?>

    <!--Include greeting toast-->
    <script type="module" src="/js/initialize-bootstrap-toast.js"></script>
</body>
</html>

<?php
    function generateGuestbookEntryDisplay($name, $submissionDate, $message) {
        // Convert the string to a DateTime object
        $yourDate = new DateTime($submissionDate);

        // Get the current date and time
        $currentDate = new DateTime();

        // Calculate the difference between the two dates
        $difference = $currentDate->diff($yourDate);

        // Extract the number of days from the difference
        $daysAgo = $difference->days;

        return "<div class='card col-12 mx-md-1 mb-3 p-3'>
                    <h3>" . displayStrong($name) . "replied {$daysAgo} days ago</h3>
                    <p>{$message}</p>
                </div>";
    }
?>