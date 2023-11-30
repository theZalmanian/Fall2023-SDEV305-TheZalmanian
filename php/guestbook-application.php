<?php 
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initial.php");

    // save the current pages name to session
    $currPageTitle = "Guestbook Application";
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
                <form class="row mx-1" id="guestbook-application" action="../php/send-email.php" method="post">
                    <div class="card col-12 my-1 p-2 text-center">
                        <h1>
                            Guestbook Application
                        </h1> 
                    </div>

                    <div class="card col-12 my-1 p-3">
                        <?php 
                            echo generateBootstrapFloatingTextBox("name", "Name", true)
                        ?>
                    </div>
                    <div class="card col-12 my-1 p-3">
                        <?php 
                            echo generateBootstrapFloatingTextArea("message", "Message", true)
                        ?>
                    </div>
                    <div class="card col-12 my-1 p-3">
                        <button class="btn py-2 border" id="submit-contact">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2 col-lg-3">
            </div>
        </div>
    </main>
</body>
</html>