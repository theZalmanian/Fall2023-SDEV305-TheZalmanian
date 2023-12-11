<?php 
    // get access to all PHP helpers
    require_once("/home/thezalma/public_html/initial.php");

    // save the current pages name to session
    $currPageTitle = "Resume";
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
            <div class="col-md-1 col-lg-2">
            </div>
            <div class="col-12 col-md-10 col-lg-8">
                <div class="container">
                    <div class="row card p-2 text-center" id="personal-info">
                        <h1 class="col-12">
                            Zalman Izak | Full-Stack Developer
                        </h1> 
                        <div class="col-12 d-flex justify-content-center align-items-center" id="personal-links">
                            <a class="icon" href="tel:2539734358" aria-label="Phone">
                                <svg viewBox="0 0 32.00 32.00" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M 5 5 L 5 27 L 27 27 L 27 5 Z M 7 7 L 25 7 L 25 25 L 7 25 z" />
                                    <path d="M 11.871094 9.0019531 C 11.380969 9.0019531 10.889625 9.1875469 10.515625 9.5605469 L 9.5605469 10.515625 C 9.0345469 11.043625 8.8604219 11.805953 9.1074219 12.501953 L 9.1503906 12.632812 C 9.3153906 13.135813 9.7018906 14.312688 10.962891 16.179688 C 11.574891 17.087688 12.283547 17.937313 13.060547 18.695312 L 13.294922 18.929688 C 14.060922 19.713687 14.908406 20.421156 15.816406 21.035156 C 17.685406 22.296156 18.864188 22.681656 19.367188 22.847656 L 19.498047 22.892578 C 19.707047 22.965578 19.923719 23.001953 20.136719 23.001953 C 20.632719 23.001953 21.115375 22.8065 21.484375 22.4375 L 22.439453 21.484375 C 22.801453 21.121375 23 20.641859 23 20.130859 C 23 19.618859 22.801453 19.136391 22.439453 18.775391 L 21.289062 17.626953 C 20.566063 16.903953 19.304078 16.903953 18.580078 17.626953 L 16.873047 19.333984 C 16.102047 18.806984 15.37875 18.199437 14.71875 17.523438 L 14.46875 17.273438 C 13.79875 16.619438 13.193969 15.896953 12.667969 15.126953 L 14.375 13.419922 C 14.737 13.058922 14.935547 12.575453 14.935547 12.064453 C 14.935547 11.553453 14.737 11.073937 14.375 10.710938 L 13.222656 9.5605469 C 12.850156 9.1885469 12.361219 9.0019531 11.871094 9.0019531 z">
                                    </path>
                                </svg>
                            </a> 
                            <a class="icon" href="mailto:zalman.izak@gmail.com" aria-label="Email">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M 5 5 L 5 27 L 27 27 L 27 5 Z M 7 7 L 25 7 L 25 25 L 7 25 z" />
                                    <path d="M 9 10 L 9 22 L 23 22 L 23 10 z M 11.8125 12 L 20.1875 12 L 16 14.78125 z M 11 13.875 L 15.4375 16.84375 L 16 17.1875 L 16.5625 16.84375 L 21 13.875 L 21 20 L 11 20 z">
                                    </path>
                                </svg>
                            </a>
                            <a class="icon" target="_blank" href="https://github.com/thezalmanian" aria-label="GitHub">
                                <?php echo $svgIcons["GitHub"]; ?>
                            </a>
                            <a class="icon" target="_blank" href="https://www.linkedin.com/in/zalman-izak/" aria-label="LinkedIn">
                                <?php echo $svgIcons["LinkedIn"]; ?>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="accordion my-2" id="resume-info">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" 
                                data-bs-toggle="collapse" data-bs-target="#education" 
                                aria-expanded="true" aria-controls="education">
                                Education
                            </button>
                        </h2>
                        <div id="education" class="accordion-collapse collapse show">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush px-3">
                                    <li class="list-group-item" id="GRC-info">
                                        <div class="row">
                                            <p class="col-6 col-md-8">
                                                <strong>Green River College, Auburn, WA</strong>
                                            </p>
                                            <p class="col-6 col-md-4 text-end">
                                                09/2023 to Present
                                            </p>
                                        </div>
                                        <div>
                                            <p>
                                                <i>Bachelor of Applied Science, Software Development</i>
                                            </p>
                                            <ul>
                                                <li>
                                                    Expected Graduation: 06/2025
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="list-group-item" id="CPTC-info">
                                        <div class="row">
                                            <p class="col-6 col-md-8">
                                                <strong>Clover Park Technical College, Lakewood, WA</strong>
                                            </p>
                                            <p class="col-6 col-md-4 text-end">
                                                01/2022 to 09/2023
                                            </p>
                                        </div>
                                        <p>
                                            <i>Associate of Applied Technology, Computer Programming</i>
                                        </p>
                                        <ul>
                                            <li>
                                                Courses:  Web Dev Principles, Advanced DB, Advanced JavaScript, Advanced .NET Web
                                            </li>
                                            <li>
                                                Attended through Running Start and received HS diploma with AAT.
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#skills" 
                                    aria-expanded="false" aria-controls="skills">
                                Technology Summary
                            </button>
                        </h2>
                    <div id="skills" class="accordion-collapse collapse">
                        <div class="accordion-body p-0">
                            <ul class="list-group list-group-flush px-3">
                                <li class="list-group-item">
                                    <b>Programming Languages:</b> C#, Java, JavaScript, TypeScript, PHP; T-SQL, MySQL; HTML5, CSS
                                </li>
                                <li class="list-group-item">
                                    <b>Libraries/Frameworks:</b> ASP.NET, EF Core, Bootstrap
                                </li>
                                <li class="list-group-item">
                                    <b>IDE & Design Tools:</b> Visual Studio, VS Code, PhpStorm, IntelliJ IDEA, Azure Data Studio, SSMS
                                </li>
                                <li class="list-group-item">
                                    <b>Additional Skills:</b> Source control workflow, specifically using GitHub, in personal and team environments.
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#experience" 
                                    aria-expanded="false" aria-controls="experience">
                                Experience
                            </button>
                        </h2>
                        <div id="experience" class="accordion-collapse collapse">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush px-3">
                                    <li class="list-group-item" id="persona-game-db">
                                        <div class="row">
                                            <div class="col-6 col-md-8">
                                                <a class="nav-link" href="https://personagamedb.com/">
                                                    PersonaGameDB
                                                </a>
                                            </div>
                                            <p class="col-6 col-md-4 text-end">
                                                Present
                                            </p>
                                        </div>
                                        <p>
                                            Collaborating on an ASP.NET wiki site for the game Persona 5, hosted through Microsoft Azure.                                        </p>
                                        <ul>
                                            <li>
                                                Created and organized a SQL Server managing 22+ classes through EF Core.
                                            </li>
                                            <li>
                                                Implemented the SendGrid, Google AdSense, and Google Analytics APIs
                                            </li>
                                        </ul>
                                        <p>
                                            <b>Technologies Used:</b> C#, JavaScript, HTML5, CSS, Bootstrap; ASP.NET, EF Core, T-SQL; Visual Studio
                                        </p>
                                    </li>
                                    <li class="list-group-item" id="electronics-store-pos">
                                        <div class="row">
                                            <div class="col-6 col-md-8">
                                                <a class="nav-link" href="https://github.com/MistySunMew/ElectronicsStorePOS">
                                                    ElectronicsStorePOS
                                                </a>
                                            </div>
                                            <p class="col-6 col-md-4 text-end">
                                                02/2023
                                            </p>
                                        </div>
                                        <p>
                                            Collaborated on a Windows Forms application which simulates an electronics store's point-of-sales system:
                                        </p>
                                        <ul>
                                            <li>
                                                Implemented EF Core to manage the data of 50+ products in a SQL database.
                                            </li>
                                            <li>
                                                Leveraged Git features, including issues, branches, pull requests, and code reviews, to effectively organize and manage the project.
                                            </li>
                                        </ul>
                                        <p>
                                            <b>Technologies Used:</b> C#; EF Core, T-SQL; Git, GitHub; Visual Studio
                                        </p>
                                    </li>
                                    <li class="list-group-item" id="pig-dice">
                                        <div class="row">
                                            <div class="col-6 col-md-8">
                                                <a class="nav-link" href="https://github.com/theZalmanian/Fall2022-CPW204-PigDice">
                                                    Pig Dice
                                                </a>
                                            </div>
                                            <p class="col-6 col-md-4 text-end">
                                                11/2022
                                            </p>
                                        </div>
                                        <p>
                                            Implemented the Pig Dice game, where two players roll a die until one reaches 100 points:
                                        </p>
                                        <ul>
                                            <li>
                                                Created classes to keep track of game state, and dynamically created/deleted page content with JS.
                                            </li>
                                            <li>
                                                Utilized SVGs to simulate animations throughout the game when players rolled the die.
                                            </li>
                                            <li>
                                                Customized webpage with CSS and a pre-loader library.
                                            </li>
                                        </ul>
                                        <p>
                                            <b>Technologies Used</b>: TypeScript, JavaScript, HTML5, CSS; Git, GitHub; VS Code
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
            	    </div>
			    </div>
            </div>
			<div class="col-md-1 col-lg-2">
			</div>
        </div>
    </main>
    
    <?php echo generateGreetingToast(); ?>

    <!--Include greeting toast-->
    <script type="module" src="/js/initialize-bootstrap-toast.js"></script>

    <!--Include dynamic accordion-->
    <script type="module" src="/js/responsive-accordion-toggle.js"></script>
</body>
</html>
