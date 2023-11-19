<?php 
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initialize.php");

    // save the current pages name to session
    $currPageTitle = "Contact Me";
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
                <div class="card p-2 text-center">
                    <h1>
                        Contact Me
                    </h1> 
                </div>

                <form class="my-2" id="contact-form" action="../php/send-email.php" method="post">
                    <div class="card p-3 my-1">
                        <div class="contact form-floating">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="" required>
                            <label for="name">
                                Name <span class="text-danger">*</span>
                            </label>
                        </div>
                    </div>
                    <div class="card p-3 my-1">
                        <div class="contact form-floating">
                            <input type="email" class="form-control" id="email" name="email" 
                                placeholder="" required>
                            <label for="email">
                                Email Address <span class="text-danger">*</span>
                            </label>
                        </div>
                    </div>
                    <div class="card p-3 my-1">
                        <div class="contact form-floating">
                            <textarea class="form-control" id="message" name="message"
                                placeholder="" required></textarea>
                            <label for="message">
                                Message <span class="text-danger">*</span>
                            </label>
                        </div>
                    </div>
                    <div class="card p-3 my-1">
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