<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="/images/theZalmanian.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/site.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="/js/helpers.js"></script>
    <script type="module" src="/js/theme-switcher.js"></script>
</head>
<body>
    <?php 
        // open access to the session
        session_start();

        // save the current page
        $_SESSION["currentPage"] = "Contact Me";

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