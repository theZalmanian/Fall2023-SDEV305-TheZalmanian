<?php 
    // get access to all helper methods
    require_once("../layouts/helpers.php"); 

    // save the current pages name to session
    setCurrentPage("Contact Me");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        // include standard header metadata
        require "../layouts/standard-page-metadata.php"; 
    ?>
</head>
<body>
    <?php 
        // display site navigation
        require "../layouts/navigation.php";     
    ?>
    <main class="container">
        <div class="row">
            <div class="col-md-2 col-lg-3">
            </div>
            <div class="col-md-8 col-lg-6">
                <form action="/send-email.php" method="post" id="contact-form">
                    <div class="contact form-floating my-2">
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="" required>
                        <label for="name">Name*</label>
                    </div>
                    <div class="contact form-floating my-2">
                        <input type="email" class="form-control" id="email" name="email" 
                            placeholder="" required>
                        <label for="email">Email Address*</label>
                    </div>
                    <div class="contact form-floating my-2">
                        <textarea class="form-control" id="message" name="message"
                            placeholder="" required></textarea>
                        <label for="message">Message*</label>
                    </div>
                    <button class="btn w-100 py-2 mb-2 border" id="submit-contact">Submit</button>
                </form>
            </div>
            <div class="col-md-2 col-lg-3">
            </div>
        </div>
    </main>
</body>
</html>