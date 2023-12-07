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
                                            WHERE Published = TRUE");

                    // run through all returned entries
                    while($currEntry = mysqli_fetch_assoc($result)) {
                        echo generateGuestbookEntryDisplay($currEntry["Name"], $currEntry["Message"]);
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
    function generateGuestbookEntryDisplay($name, $message) {
        return "<div class='card'>
                    <h1>{$name} replied x days ago</h1>
                    <p>{$message}</p>
                </div>";
    }
?>