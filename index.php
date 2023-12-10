<?php 
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initial.php");

    // save the current pages name to session
    $currPageTitle = "Home";
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
            <div class="col-md-2 col-lg-4">
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="greeting-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img class="border border-2 rounded-circle me-2" src="/images/theZalmanian.jpg" 
                                height="30" alt="A forest with light streaming through">
                            <strong class="me-auto">theZalmanian</strong>
                            <small><?php new DateTime(); ?></small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            <?php echo "Hello {$_COOKIE[NAME_KEY]}"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-4">
                <div class="card text-center mb-2">
                    <img src="/images/zalman_photo.jpg" class="card-img-top p-2" alt="A really cool image of Zalman Izak">
                    <div class="card-body">
                        <p class="card-text">
                            Hi there, I'm Zalman, a Software Development student at Green River College focusing on C#, Java, and JavaScript. 
                            I primarily specialize in full-stack development: constructing custom and functional websites using C# through 
                            ASP.NET and interactive, dynamic web experiences with JavaScript.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-4">
            </div>
        </div>
    </main>

    <!--Include greeting toast-->
    <script type="module" src="/js/initialize-bootstrap-toast.js"></script>
</body>
</html>