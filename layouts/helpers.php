<?php 
    // open access to the session
    session_start();

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
?>