<?php 
    // only start a session if one does not exist yet
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    /**
     * Gets and returns the page that is currently open from Session Storage, if any
     * @return string the page that is currently open from Session Storage, if present; otherwise empty string
     */
    function getCurrentPage() {
        // return the page that is currently open from Session Storage, 
        // if one is not present, return an empty string
        return isset($_SESSION["currentPage"]) ? $_SESSION["currentPage"] : ""; 
    }

    /**
     * Sets the current page in Session Storage to be the given page
     * @param string $pageTitle The page being saved as the current page in Session Storage
     */
    function setCurrentPage($pageTitle) {
        // save the given pages name to session as the current page
        $_SESSION["currentPage"] = $pageTitle;
    }

    /**
     * Returns a Bootstrap card containing the given error message
     * @param string $errorMessage The error message being displayed in the Bootstrap card
     * @return string a Bootstrap card containing the given error message
     */
    function displayError($errorMessage) {
        // setup error content
        $errorContent = "<h4>
                            Error: {$errorMessage}
                        </h4>";

        return displayBootstrapAlert($errorContent);
    }

    /**
     * Returns a Bootstrap Alert containing the given HTML content
     * @param string $htmlContent The HTML content being displayed in the Bootstrap Alert
     * @return string a Bootstrap Alert containing the given HTML content
     */
    function displayBootstrapAlert($htmlContent) {
        return "<div class='alert alert-light text-center my-2' role='alert'>
                    {$htmlContent}
                </div>";
    }
?>