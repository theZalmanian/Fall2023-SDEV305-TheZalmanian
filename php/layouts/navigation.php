<?php
    // get access to all helper methods
    require_once("/home/thezalma/public_html/php/helpers.php"); 

    /**
     * A collection of all pages in the navigation and their corresponding links
     */
    $navigationPages = array(
        "Home" => "/index.html",
        "Resume" => "/portfolio/resume.php",
        "Projects" => "/portfolio/projects.php",
        "Contact Me" => "/portfolio/contact.php"
    );

    /**
     * Checks if the given page name matches the current page,
     * and returns the corresponding class attributes to be added to a link if so
     * @param string $pageName The name of the page being checked
     * @return string a string containing the active and disabled classes if match; otherwise empty string
     */
    function isActive($pageName) {
        // if the given page name matches that of the current page
        if($pageName === getCurrentPage()) {
            // return the active and disabled attributes to be
            // added to that link's class list
            return " " . "active disabled";
        }

        // otherwise return empty string
        return "";
    }
?>

<nav class="navbar sticky-top navbar-expand-md mb-3 border-bottom">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <img class="me-2 border" src="/images/theZalmanian.jpg" height="43" alt="A forest with light streaming through">
            <a class="icon" href="https://github.com/thezalmanian" aria-label="GitHub">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 5 5 L 5 27 L 27 27 L 27 5 Z M 7 7 L 25 7 L 25 25 L 7 25 z" />
                    <path d="M 15.908203 9 C 11.989203 9 9 11.974766 9 15.884766 C 9 19.017766 10.967203 21.699578 13.783203 22.642578 C 14.148203 22.706578 14.275391 22.482781 14.275391 22.300781 C 14.275391 22.126781 14.267578 21.159453 14.267578 20.564453 C 14.267578 20.564453 12.283094 20.991656 11.871094 19.722656 C 11.871094 19.722656 11.547891 18.905406 11.087891 18.691406 C 11.087891 18.691406 10.444766 18.247859 11.134766 18.255859 C 11.134766 18.255859 11.833656 18.312328 12.222656 18.986328 C 12.840656 20.081328 13.878203 19.762078 14.283203 19.580078 C 14.346203 19.128078 14.530328 18.810906 14.736328 18.628906 C 13.157328 18.454906 11.5625 18.224719 11.5625 15.511719 C 11.5625 14.733719 11.776516 14.345703 12.228516 13.845703 C 12.156516 13.662703 11.911781 12.901781 12.300781 11.925781 C 12.895781 11.742781 14.251953 12.6875 14.251953 12.6875 C 14.814953 12.5365 15.424344 12.449219 16.027344 12.449219 C 16.630344 12.449219 17.241688 12.5365 17.804688 12.6875 C 17.804688 12.6875 19.160859 11.743781 19.755859 11.925781 C 20.143859 12.909781 19.897172 13.663703 19.826172 13.845703 C 20.278172 14.345703 20.556641 14.734719 20.556641 15.511719 C 20.556641 18.239719 18.8905 18.454906 17.3125 18.628906 C 17.5745 18.850906 17.796875 19.2715 17.796875 19.9375 C 17.796875 20.8895 17.789062 22.072734 17.789062 22.302734 C 17.789063 22.484734 17.916438 22.705578 18.273438 22.642578 C 21.088437 21.698578 23 19.017766 23 15.884766 C 23 11.974766 19.827203 9 15.908203 9 z">
                    </path>
                </svg>
            </a>
            <a class="icon" href="https://www.linkedin.com/in/zalman-izak/" aria-label="LinkedIn">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 5 5 L 5 27 L 27 27 L 27 5 Z M 7 7 L 25 7 L 25 25 L 7 25 z" />
                    <path d="M 10.4375 8.71875 C 9.488281 8.71875 8.71875 9.488281 8.71875 10.4375 C 8.71875 11.386719 9.488281 12.15625 10.4375 12.15625 C 11.386719 12.15625 12.15625 11.386719 12.15625 10.4375 C 12.15625 9.488281 11.386719 8.71875 10.4375 8.71875 z M 19.46875 13.28125 C 18.035156 13.28125 17.082031 14.066406 16.6875 14.8125 L 16.625 14.8125 L 16.625 13.5 L 13.8125 13.5 L 13.8125 23 L 16.75 23 L 16.75 18.3125 C 16.75 17.074219 16.996094 15.875 18.53125 15.875 C 20.042969 15.875 20.0625 17.273438 20.0625 18.375 L 20.0625 23 L 23 23 L 23 17.78125 C 23 15.226563 22.457031 13.28125 19.46875 13.28125 z M 9 13.5 L 9 23 L 11.96875 23 L 11.96875 13.5 z">
                    </path>
                </svg>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-nav"
                aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbar-nav">
            <div class="navbar-nav">
                <?php 
                    // generate a link for each stored navigation page
                    foreach ($navigationPages as $pageLabel => $pageLink) {
                        echo "<a class='nav-link" . isActive($pageLabel) . "' href='{$pageLink}'>
                                {$pageLabel}       
                             </a>";
                    } 
                ?>
                <a class="nav-link" id="theme-switcher">
                    <svg viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                        <path id="theme-icon" d="M 27.9999 51.9063 C 41.0546 51.9063 51.9063 41.0781 51.9063 28 C 51.9063 14.9453 41.0312 4.0937 27.9765 4.0937 C 14.8983 4.0937 4.0937 14.9453 4.0937 28 C 4.0937 41.0781 14.9218 51.9063 27.9999 51.9063 Z M 27.9999 47.9219 C 16.9374 47.9219 8.1014 39.0625 8.1014 28 C 8.1014 16.9609 16.9140 8.0781 27.9765 8.0781 C 39.0155 8.0781 47.8983 16.9609 47.9219 28 C 47.9454 39.0625 39.0390 47.9219 27.9999 47.9219 Z M 34.7030 33.2031 C 27.6014 33.2031 23.0546 28.75 23.0546 21.6484 C 23.0546 20.1719 23.4530 18.0859 23.8749 16.9844 C 23.9921 16.6797 24.0155 16.4922 24.0155 16.3750 C 24.0155 16.0234 23.7343 15.6250 23.2421 15.6250 C 23.0780 15.6250 22.7968 15.6484 22.4921 15.7656 C 17.6405 17.6875 14.3827 22.9375 14.3827 28.4453 C 14.3827 36.1563 20.2655 41.6641 27.9765 41.6641 C 33.6014 41.6641 38.4530 38.1953 40.1405 33.9531 C 40.2577 33.6484 40.2812 33.3437 40.2812 33.25 C 40.2812 32.7578 39.8827 32.4297 39.5077 32.4297 C 39.3671 32.4297 39.2030 32.4531 38.9452 32.5234 C 37.9609 32.8750 36.3202 33.2031 34.7030 33.2031 Z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>