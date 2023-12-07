<?php 
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initial.php");

    // save the current pages name to session
    $currPageTitle = "Approve Entry";

    /**
     * The message that will be displayed to user
     */
    $message = "";
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
                    // if a token was given
                    if(isset($_GET["token"])) {
                        // attempt to approve entry
                        approveEntryIfMatches();
                    }

                    else {
                        $message = "Access Denied";
                    }

                    // link to Guestbook page
                    echo generateMessageWithLink("/portfolio/guestbook.php", "Guestbook", $message);
                ?>
            </div>
            <div class="col-md-2 col-lg-3">
            </div>
        </div>
    </main>
</body>

<?php 
    /**
     * Checks if there is an entry in DB matching the given token
     * If there is updates that entry to be published, otherwise displays error
     */
    function approveEntryIfMatches() {
        global $message;

        // check DB for entry containing that token
        $result = executeQuery("SELECT EntryID 
                                FROM GuestbookEntries
                                WHERE Token = '{$_GET["token"]}'");

        $entry = mysqli_fetch_assoc($result);

        // if such an entry exists
        if(!empty($entry)) {
            // get the EntryID from entry
            $entryID = $entry["EntryID"];

            // update that entry to be published on Guestbook page
            // and remove that token from DB
            $result = executeQuery("UPDATE GuestbookEntries 
                                        SET Published = '1', Token = NULL 
                                    WHERE EntryID = {$entryID}");

            // if update was successful
            if($result) {
                $message = "Guestbook entry approved successfully";
            }

            // otherwise display error
            else {
                $message = "Entry could not be updated, try again later";
            }
        }

        // if there is no entry matching that token
        else {
            $message = "Invalid token received";
        }
    }
?>