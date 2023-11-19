<?php 
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initialize.php");

    // save the current pages name to session
    $pageTitle = "Home";
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
</body>
</html>