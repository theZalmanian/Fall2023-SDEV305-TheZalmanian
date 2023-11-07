<?php 
    // get access to all helper methods
    require_once("../layouts/helpers.php"); 

    // save the current pages name to session
    setCurrentPage("Projects");
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
            <div class="col-md-1 col-lg-2">
            </div>
            <div class="col-12 col-md-10 col-lg-8">
                <div class="accordion mb-2" id="projects">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#nursing-nucleus" 
                                    aria-expanded="false" aria-controls="nursing-nucleus">
                                Team Gecko - Present
                            </button>
                        </h2>
                        <div id="nursing-nucleus" class="accordion-collapse collapse" data-bs-parent="#projects">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush px-3">
                                    <li class="list-group-item text-center">
                                        <a class="btn col-12 col-xl-5 m-1 border" target="_blank" href="https://github.com/theZalmanian/TeamGecko/">
                                            Check out project on GitHub
                                        </a>
                                        <a class="btn col-12 col-xl-5 m-1 border" target="_blank" href="https://geckos.greenriverdev.com/">
                                            Visit Live Demo
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <p>
                                            Collaborating on a web portal for the GRC Nursing Program, hosted through WH4S and cPanel:
                                        </p>
                                        <ul>
                                            <li>
                                                Implemented client requirements over 2 weeks sprints.
                                            </li>
                                            <li>
                                                Constructed a MySQL database, using PHP to manage client data.              
                                            </li>
                                            <li>
                                                Designed and implemented the user interface using a mix of custom CSS and Bootstrap.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <strong>Technologies Used:</strong> PHP, JavaScript, HTML5, CSS, Bootstrap; MySQL; Git, GitHub; VS Code, PhpStorm
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-center">
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.349 13.609h-1.261l-0.687 3.531h1.12c0.739 0 1.291-0.14 1.656-0.421 0.359-0.276 0.604-0.745 0.729-1.396 0.124-0.625 0.067-1.068-0.161-1.328-0.235-0.255-0.699-0.385-1.396-0.385zM16 7.584c-8.839 0-16 3.771-16 8.416s7.161 8.416 16 8.416c8.839 0 16-3.771 16-8.416s-7.161-8.416-16-8.416zM11.651 17.521c-0.344 0.333-0.765 0.583-1.219 0.733-0.448 0.141-1.020 0.219-1.713 0.219h-1.579l-0.432 2.24h-1.839l1.641-8.432h3.531c1.063 0 1.839 0.276 2.328 0.833 0.485 0.557 0.636 1.339 0.437 2.339-0.072 0.396-0.213 0.776-0.405 1.131-0.193 0.337-0.437 0.651-0.751 0.937zM17.021 18.473l0.724-3.733c0.083-0.423 0.052-0.713-0.095-0.871-0.14-0.151-0.448-0.229-0.916-0.229h-1.453l-0.937 4.833h-1.828l1.64-8.437h1.823l-0.437 2.245h1.625c1.027 0 1.729 0.177 2.115 0.531 0.391 0.36 0.505 0.937 0.355 1.735l-0.767 3.927zM27.145 15.453c-0.072 0.396-0.208 0.776-0.405 1.131-0.188 0.337-0.437 0.651-0.745 0.937-0.349 0.328-0.765 0.583-1.224 0.733-0.448 0.141-1.021 0.219-1.713 0.219h-1.573l-0.437 2.24h-1.839l1.641-8.432h3.531c1.063 0 1.839 0.276 2.328 0.839 0.485 0.552 0.636 1.333 0.437 2.333zM23.688 13.609h-1.256l-0.687 3.531h1.115c0.744 0 1.296-0.14 1.656-0.421 0.364-0.276 0.609-0.745 0.735-1.396 0.124-0.625 0.067-1.068-0.168-1.328-0.228-0.255-0.697-0.385-1.395-0.385z">
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h32v32h-32zM29.38 24.37c-0.234-1.464-1.188-2.688-4.005-3.833-0.979-0.458-2.073-0.781-2.396-1.521-0.12-0.438-0.141-0.677-0.063-0.938 0.203-0.865 1.219-1.12 2.021-0.88 0.521 0.161 1 0.557 1.302 1.198 1.38-0.901 1.38-0.901 2.339-1.5-0.359-0.557-0.536-0.802-0.781-1.036-0.839-0.943-1.958-1.422-3.776-1.38l-0.943 0.12c-0.901 0.219-1.76 0.698-2.281 1.339-1.516 1.719-1.078 4.719 0.76 5.964 1.818 1.359 4.479 1.656 4.823 2.938 0.318 1.563-1.161 2.063-2.625 1.88-1.078-0.24-1.677-0.781-2.339-1.781l-2.438 1.401c0.276 0.641 0.599 0.917 1.078 1.479 2.318 2.339 8.12 2.219 9.161-1.339 0.036-0.12 0.318-0.943 0.099-2.198zM17.401 14.708h-2.995c0 2.583-0.016 5.151-0.016 7.74 0 1.641 0.083 3.151-0.182 3.615-0.443 0.917-1.573 0.802-2.089 0.641-0.526-0.26-0.797-0.62-1.104-1.141-0.089-0.141-0.151-0.26-0.172-0.26l-2.432 1.5c0.406 0.839 1 1.563 1.766 2.021 1.141 0.682 2.672 0.901 4.276 0.542 1.042-0.302 1.943-0.922 2.411-1.88 0.682-1.24 0.536-2.76 0.531-4.464 0.016-2.74 0-5.479 0-8.24z">
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M30.713,0.501L71.717,460.42l184.006,51.078l184.515-51.15L481.287,0.501H30.713z M395.754,109.646 l-2.567,28.596l-1.128,12.681h-0.187H256h-0.197h-79.599l5.155,57.761h74.444H256h115.723h15.201l-1.377,15.146l-13.255,148.506 l-0.849,9.523L256,413.854v0.012l-0.259,0.072l-115.547-32.078l-7.903-88.566h26.098h30.526l4.016,44.986l62.82,16.965l0.052-0.014 v-0.006l62.916-16.977l6.542-73.158H256h-0.197H129.771l-13.863-155.444l-1.351-15.131h141.247H256h141.104L395.754,109.646z"> 
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M483.111,0.501l-42.59,461.314l-184.524,49.684L71.47,461.815L28.889,0.501H483.111z M397.29,94.302 H255.831H111.866l6.885,55.708h137.08h7.7l-7.7,3.205l-132.07,55.006l4.38,54.453l127.69,0.414l68.438,0.217l-4.381,72.606 l-64.058,18.035v-0.057l-0.525,0.146l-61.864-15.617l-3.754-45.07h-0.205H132.1h-0.202l7.511,87.007l116.423,34.429v-0.062 l0.21,0.062l115.799-33.802l15.021-172.761h-131.03h-0.323l0.323-0.14l135.83-58.071L397.29,94.302z"> 
                                                </path>
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#persona-game-db" 
                                    aria-expanded="false" aria-controls="persona-game-db">
                                PersonaGameDB - Present
                            </button>
                        </h2>
                        <div id="persona-game-db" class="accordion-collapse collapse" data-bs-parent="#projects">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush px-3">
                                    <li class="list-group-item text-center">
                                        <a class="btn w-100 border" target="_blank" href="https://personagamedb.com/">
                                            Visit Live Demo
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <p>
                                            Collaborating on an ASP.NET wiki site for the game Persona 5, hosted through Microsoft Azure:
                                        </p>
                                        <ul>
                                            <li>
                                                Created and organized a SQL Server managing 22+ classes through EF Core.
                                            </li>
                                            <li>
                                                Implemented the SendGrid, Google AdSense, and Google Analytics APIs.
                                            </li>
                                            <li>
                                                Utilized the MVC design pattern to structure pages effectively.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <strong>Technologies Used:</strong> C#, JavaScript, HTML5, CSS, Bootstrap; ASP.NET, EF Core, T-SQL; Git, GitHub; Visual Studio
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-center">
                                            <svg class="language-badge p-2 m-2 rounded-4 border" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M233.274,286.089l89.802,27.145c-6.035,25.188-15.535,46.223-28.5,63.107 c-12.975,16.894-29.071,29.638-48.297,38.233c-19.229,8.596-43.697,12.894-73.412,12.894c-36.038,0-65.482-5.238-88.33-15.711 c-22.852-10.477-42.563-28.896-59.155-55.271C8.794,330.114,0.5,296.354,0.5,255.208c0-54.855,14.594-97.016,43.769-126.479 c29.18-29.461,70.464-44.197,123.855-44.197c41.776,0,74.614,8.451,98.51,25.336c23.91,16.892,41.659,42.834,53.273,77.816 l-90.481,20.131c-3.164-10.098-6.485-17.492-9.95-22.168c-5.733-7.839-12.745-13.871-21.043-18.095 c-8.294-4.22-17.564-6.337-27.82-6.337c-23.23,0-41.024,9.343-53.391,28.021c-9.342,13.861-14.018,35.626-14.018,65.294 c0,36.756,5.576,61.948,16.732,75.584c11.16,13.627,26.848,20.439,47.059,20.439c19.599,0,34.413-5.503,44.449-16.516 C221.474,323.04,228.751,307.046,233.274,286.089z M485.345,239.259l-6.854,34.292H511.5v37.262h-40.452l-9.5,47.522h-38.41 l9.527-47.522h-29.769l-9.595,47.522h-38.14l9.527-47.522h-18.572v-37.262h26.047l6.876-34.292h-32.923v-37.262h40.398 l9.688-48.332h38.409l-9.752,48.332h29.625l9.694-48.332h38.273l-9.657,48.332H511.5v37.262H485.345z M447.017,239.259h-29.68 l-6.921,34.292h29.724L447.017,239.259z"> 
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h32v32h-32zM29.38 24.37c-0.234-1.464-1.188-2.688-4.005-3.833-0.979-0.458-2.073-0.781-2.396-1.521-0.12-0.438-0.141-0.677-0.063-0.938 0.203-0.865 1.219-1.12 2.021-0.88 0.521 0.161 1 0.557 1.302 1.198 1.38-0.901 1.38-0.901 2.339-1.5-0.359-0.557-0.536-0.802-0.781-1.036-0.839-0.943-1.958-1.422-3.776-1.38l-0.943 0.12c-0.901 0.219-1.76 0.698-2.281 1.339-1.516 1.719-1.078 4.719 0.76 5.964 1.818 1.359 4.479 1.656 4.823 2.938 0.318 1.563-1.161 2.063-2.625 1.88-1.078-0.24-1.677-0.781-2.339-1.781l-2.438 1.401c0.276 0.641 0.599 0.917 1.078 1.479 2.318 2.339 8.12 2.219 9.161-1.339 0.036-0.12 0.318-0.943 0.099-2.198zM17.401 14.708h-2.995c0 2.583-0.016 5.151-0.016 7.74 0 1.641 0.083 3.151-0.182 3.615-0.443 0.917-1.573 0.802-2.089 0.641-0.526-0.26-0.797-0.62-1.104-1.141-0.089-0.141-0.151-0.26-0.172-0.26l-2.432 1.5c0.406 0.839 1 1.563 1.766 2.021 1.141 0.682 2.672 0.901 4.276 0.542 1.042-0.302 1.943-0.922 2.411-1.88 0.682-1.24 0.536-2.76 0.531-4.464 0.016-2.74 0-5.479 0-8.24z">
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M30.713,0.501L71.717,460.42l184.006,51.078l184.515-51.15L481.287,0.501H30.713z M395.754,109.646 l-2.567,28.596l-1.128,12.681h-0.187H256h-0.197h-79.599l5.155,57.761h74.444H256h115.723h15.201l-1.377,15.146l-13.255,148.506 l-0.849,9.523L256,413.854v0.012l-0.259,0.072l-115.547-32.078l-7.903-88.566h26.098h30.526l4.016,44.986l62.82,16.965l0.052-0.014 v-0.006l62.916-16.977l6.542-73.158H256h-0.197H129.771l-13.863-155.444l-1.351-15.131h141.247H256h141.104L395.754,109.646z"> 
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M483.111,0.501l-42.59,461.314l-184.524,49.684L71.47,461.815L28.889,0.501H483.111z M397.29,94.302 H255.831H111.866l6.885,55.708h137.08h7.7l-7.7,3.205l-132.07,55.006l4.38,54.453l127.69,0.414l68.438,0.217l-4.381,72.606 l-64.058,18.035v-0.057l-0.525,0.146l-61.864-15.617l-3.754-45.07h-0.205H132.1h-0.202l7.511,87.007l116.423,34.429v-0.062 l0.21,0.062l115.799-33.802l15.021-172.761h-131.03h-0.323l0.323-0.14l135.83-58.071L397.29,94.302z"> 
                                                </path>
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#simon" 
                                    aria-expanded="false" aria-controls="simon">
                                Simon - 06/2023
                            </button>
                        </h2>
                        <div id="simon" class="accordion-collapse collapse" data-bs-parent="#projects">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush px-3">
                                    <li class="list-group-item text-center">
                                        <a class="btn col-12 m-1 border" target="_blank" href="https://github.com/theZalmanian/Spring2023-CPW253-Simon/">
                                            Check out project on GitHub
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <p>
                                            An Android app implementing the "Simon" memory game to showcase several Android features: 
                                        </p>
                                        <ul>
                                            <li>
                                                Employed Fragments to compartmentalize the application into multiple windows, improving user experience and navigation.
                                            </li>
                                            <li>
                                                Integrated a Room Database for storage of game data, allowing for tracking and displaying player scores.
                                            </li>
                                            <li>
                                                Utilized LiveData to observe and dynamically react to score changes in real-time.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <strong>Technologies Used:</strong> Kotlin, XML; SQLite (Room DB); Git, GitHub; Android Studio
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-center">
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.734 32l15.068-15.333 15.198 15.333zM0 0h16l-16 16.667zM17.865 0l-17.865 18.667v13.333l32-32z">
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24,21V9h-2V23h8v-2H24Z M18,9l-1.52,5L16,15.98,15.54,14,14,9,12,9,12,23,14,23,14,15,13.84,13,14.42,15,16,19.63,17.58,15,18.16,13,18,15,18,23h2V9Z M10,9,8,9,6,15,4,9,2,9,4.75,16,2,23,4,23,6,17,8,23,10,23,7.25,16,10,9Z"/>                                        
                                            </svg>                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#electronics-store-pos" 
                                    aria-expanded="false" aria-controls="electronics-store-pos">
                                    ElectronicsStorePOS - 02/2023
                            </button>
                        </h2>
                        <div id="electronics-store-pos" class="accordion-collapse collapse" data-bs-parent="#projects">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush px-3">
                                    <li class="list-group-item text-center">
                                        <a class="btn w-100 border" target="_blank" href="https://github.com/MistySunMew/ElectronicsStorePOS">
                                            Check out project on GitHub
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <p>
                                            Collaborated on a Windows Forms application which simulates an electronics store's point-of-sales system:
                                        </p>
                                        <ul>
                                            <li>
                                                Implemented EF Core to manage the data of 50+ products in a SQL database.
                                            </li>
                                            <li>
                                                Leveraged Git features, including issues, branches, and pull requests to effectively organize and manage the project.
                                            </li>
                                            <li>
                                                Conducted code reviews before updating the main branch.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <strong>Technologies Used:</strong> C#; EF Core, T-SQL; Git, GitHub; Visual Studio
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-center">
                                            <svg class="language-badge p-2 m-2 rounded-4 border" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M233.274,286.089l89.802,27.145c-6.035,25.188-15.535,46.223-28.5,63.107 c-12.975,16.894-29.071,29.638-48.297,38.233c-19.229,8.596-43.697,12.894-73.412,12.894c-36.038,0-65.482-5.238-88.33-15.711 c-22.852-10.477-42.563-28.896-59.155-55.271C8.794,330.114,0.5,296.354,0.5,255.208c0-54.855,14.594-97.016,43.769-126.479 c29.18-29.461,70.464-44.197,123.855-44.197c41.776,0,74.614,8.451,98.51,25.336c23.91,16.892,41.659,42.834,53.273,77.816 l-90.481,20.131c-3.164-10.098-6.485-17.492-9.95-22.168c-5.733-7.839-12.745-13.871-21.043-18.095 c-8.294-4.22-17.564-6.337-27.82-6.337c-23.23,0-41.024,9.343-53.391,28.021c-9.342,13.861-14.018,35.626-14.018,65.294 c0,36.756,5.576,61.948,16.732,75.584c11.16,13.627,26.848,20.439,47.059,20.439c19.599,0,34.413-5.503,44.449-16.516 C221.474,323.04,228.751,307.046,233.274,286.089z M485.345,239.259l-6.854,34.292H511.5v37.262h-40.452l-9.5,47.522h-38.41 l9.527-47.522h-29.769l-9.595,47.522h-38.14l9.527-47.522h-18.572v-37.262h26.047l6.876-34.292h-32.923v-37.262h40.398 l9.688-48.332h38.409l-9.752,48.332h29.625l9.694-48.332h38.273l-9.657,48.332H511.5v37.262H485.345z M447.017,239.259h-29.68 l-6.921,34.292h29.724L447.017,239.259z"> 
                                                </path>
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#pig-dice" 
                                    aria-expanded="false" aria-controls="pig-dice">
                                    Pig Dice - 11/2022
                            </button>
                        </h2>
                        <div id="pig-dice" class="accordion-collapse collapse" data-bs-parent="#projects">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush px-3">
                                    <li class="list-group-item text-center">
                                        <a class="btn col-12 col-xl-5 m-1 border" target="_blank" href="https://github.com/theZalmanian/Fall2022-CPW204-PigDice">
                                            Check out project on GitHub
                                        </a>
                                        <a class="btn col-12 col-xl-5 m-1 border" target="_blank" href="https://zalmanian-pig-dice.netlify.app/">
                                            Visit Live Demo
                                        </a>
                                    </li>
                                    <li class="list-group-item">
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
                                    </li>
                                    <li class="list-group-item text-center">
                                        <strong>Technologies Used:</strong> TypeScript, JavaScript, HTML5, CSS; Git, GitHub; VS Code
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-center">
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 16v16h32v-32h-32zM25.786 14.724c0.813 0.203 1.432 0.568 2.005 1.156 0.292 0.312 0.729 0.885 0.766 1.026 0.010 0.042-1.38 0.974-2.224 1.495-0.031 0.021-0.156-0.109-0.292-0.313-0.411-0.599-0.844-0.859-1.505-0.906-0.969-0.063-1.594 0.443-1.589 1.292-0.005 0.208 0.042 0.417 0.135 0.599 0.214 0.443 0.615 0.708 1.854 1.245 2.292 0.984 3.271 1.635 3.88 2.557 0.682 1.031 0.833 2.677 0.375 3.906-0.51 1.328-1.771 2.234-3.542 2.531-0.547 0.099-1.849 0.083-2.438-0.026-1.286-0.229-2.505-0.865-3.255-1.698-0.297-0.323-0.87-1.172-0.833-1.229 0.016-0.021 0.146-0.104 0.292-0.188s0.682-0.396 1.188-0.688l0.922-0.536 0.193 0.286c0.271 0.411 0.859 0.974 1.214 1.161 1.021 0.542 2.422 0.464 3.115-0.156 0.281-0.234 0.438-0.594 0.417-0.958 0-0.37-0.047-0.536-0.24-0.813-0.25-0.354-0.755-0.656-2.198-1.281-1.651-0.714-2.365-1.151-3.010-1.854-0.406-0.464-0.708-1.010-0.88-1.599-0.12-0.453-0.151-1.589-0.057-2.042 0.339-1.599 1.547-2.708 3.281-3.036 0.563-0.109 1.875-0.068 2.427 0.068zM18.276 16.063l0.010 1.307h-4.167v11.839h-2.948v-11.839h-4.161v-1.281c0-0.714 0.016-1.307 0.036-1.323 0.016-0.021 2.547-0.031 5.62-0.026l5.594 0.016z">
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h32v32h-32zM29.38 24.37c-0.234-1.464-1.188-2.688-4.005-3.833-0.979-0.458-2.073-0.781-2.396-1.521-0.12-0.438-0.141-0.677-0.063-0.938 0.203-0.865 1.219-1.12 2.021-0.88 0.521 0.161 1 0.557 1.302 1.198 1.38-0.901 1.38-0.901 2.339-1.5-0.359-0.557-0.536-0.802-0.781-1.036-0.839-0.943-1.958-1.422-3.776-1.38l-0.943 0.12c-0.901 0.219-1.76 0.698-2.281 1.339-1.516 1.719-1.078 4.719 0.76 5.964 1.818 1.359 4.479 1.656 4.823 2.938 0.318 1.563-1.161 2.063-2.625 1.88-1.078-0.24-1.677-0.781-2.339-1.781l-2.438 1.401c0.276 0.641 0.599 0.917 1.078 1.479 2.318 2.339 8.12 2.219 9.161-1.339 0.036-0.12 0.318-0.943 0.099-2.198zM17.401 14.708h-2.995c0 2.583-0.016 5.151-0.016 7.74 0 1.641 0.083 3.151-0.182 3.615-0.443 0.917-1.573 0.802-2.089 0.641-0.526-0.26-0.797-0.62-1.104-1.141-0.089-0.141-0.151-0.26-0.172-0.26l-2.432 1.5c0.406 0.839 1 1.563 1.766 2.021 1.141 0.682 2.672 0.901 4.276 0.542 1.042-0.302 1.943-0.922 2.411-1.88 0.682-1.24 0.536-2.76 0.531-4.464 0.016-2.74 0-5.479 0-8.24z">
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M30.713,0.501L71.717,460.42l184.006,51.078l184.515-51.15L481.287,0.501H30.713z M395.754,109.646 l-2.567,28.596l-1.128,12.681h-0.187H256h-0.197h-79.599l5.155,57.761h74.444H256h115.723h15.201l-1.377,15.146l-13.255,148.506 l-0.849,9.523L256,413.854v0.012l-0.259,0.072l-115.547-32.078l-7.903-88.566h26.098h30.526l4.016,44.986l62.82,16.965l0.052-0.014 v-0.006l62.916-16.977l6.542-73.158H256h-0.197H129.771l-13.863-155.444l-1.351-15.131h141.247H256h141.104L395.754,109.646z"> 
                                                </path>
                                            </svg>
                                            <svg class="language-badge p-2 m-2 rounded-4 border" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M483.111,0.501l-42.59,461.314l-184.524,49.684L71.47,461.815L28.889,0.501H483.111z M397.29,94.302 H255.831H111.866l6.885,55.708h137.08h7.7l-7.7,3.205l-132.07,55.006l4.38,54.453l127.69,0.414l68.438,0.217l-4.381,72.606 l-64.058,18.035v-0.057l-0.525,0.146l-61.864-15.617l-3.754-45.07h-0.205H132.1h-0.202l7.511,87.007l116.423,34.429v-0.062 l0.21,0.062l115.799-33.802l15.021-172.761h-131.03h-0.323l0.323-0.14l135.83-58.071L397.29,94.302z"> 
                                                </path>
                                            </svg>
                                        </div>
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
</body>
</html>