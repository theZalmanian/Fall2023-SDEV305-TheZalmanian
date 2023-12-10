<?php 
    /**
     * Generates and returns a Bootstrap Floating Label textbox, where the label sits within the textbox, 
     * using the given data and value, if any
     * @param string $inputID The ID attribute being added to the input for use with label
     * @param string $inputLabelText The text being displayed within the input's label
     * @param boolean $isRequired Whether the input is required for submission
     * @param string $value (Optional) The text being preloaded within the input, if any
     * @return string a Bootstrap Floating Label textbox generated using the given data
     */
    function generateBootstrapFloatingTextBox($inputID, $inputLabelText, $isRequired, $value = "") {
        // if the option was given as required
        $requiredAttribute = "";
        if($isRequired) {
            // update the label to display a required *
            $inputLabelText .= displayRequired();

            // add the required attribute to input
            $requiredAttribute = "required";
        }
        
        // generate Bootstrap Floating Label input area using given data
        return "<div class='form-floating'>
                    <input type='text' class='form-control' id='{$inputID}' name='{$inputID}'
                        placeholder='' value='{$value}' {$requiredAttribute}>
                    <label for='{$inputID}'>
                        {$inputLabelText}
                    </label>
                </div>";
    }

    /**
     * Generates and returns a Bootstrap Floating Label textarea, where the label sits within the textarea, 
     * using the given data and value, if any
     * @param string $inputID The ID attribute being added to the input for use with label
     * @param string $inputLabelText The text being displayed within the input's label
     * @param boolean $isRequired Whether the input is required for submission
     * @param string $value (Optional) The text being preloaded within the input, if any
     * @return string a Bootstrap Floating Label input generated using the given data
     */
    function generateBootstrapFloatingTextArea($inputID, $inputLabelText, $isRequired, $value = "") {
        // if the option was given as required
        $requiredAttribute = "";
        if($isRequired) {
            // update the label to display a required *
            $inputLabelText .= displayRequired();

            // add the required attribute to input
            $requiredAttribute = "required";
        }

        // generate Bootstrap Floating Label input area using given data
        return "<div class='form-floating'>
                    <textarea class='form-control' id='{$inputID}' name='{$inputID}' 
                        placeholder='' {$requiredAttribute}>{$value}</textarea>
                    <label for='{$inputID}'>
                        {$inputLabelText}
                    </label>
                </div>";
    }

    /**
     * Generates and returns an HTML span signifying that an input is required
     * @return string an HTML span signifying that an input is required
     */
    function displayRequired() {
        return " " . "<span class='text-danger'>*</span>";
    }

    /**
     * Returns the given text inside of an HTML strong element
     * @param string $text The message being displayed inside an HTML strong element
     * @return string the given message inside of an HTML strong element
     */
    function displayStrong($text) {
        return "<strong>{$text}</strong>" . " ";
    }

    /**
     * Generates and returns a Bootstrap Alert to be displayed containing the given title and message, 
     * along with the given link styled as a button at the bottom
     * @param string $linkHref The links destination path
     * @param string $linkText The text to be displayed in the "button" link
     * @param string $message The message itself
     * @param string $title (Optional) The title of the message block, may be unnecessary if only a message is needed
     * @return string a Bootstrap Alert containing the given HTML content
     */
    function generateMessageWithLink($linkHref, $linkText, $message, $title = "") {
        // setup message content
        $messageContent = "";
        
        // if a title was given
        if(!empty($title)) {
            // display it
            $messageContent .= "<h2>{$title}</h2>
                                <hr>";
        }

        // add message, and setup link using given attributes
        $messageContent .= "<h4>{$message}</h4>
                            <hr>
                            <a class='btn btn-success py-2 m-2 border' href='{$linkHref}'>{$linkText}</a>";

        // place and return message content inside Bootstrap Alert
        return generateBootstrapAlert($messageContent);
    }

    /**
     * Generates and returns a Bootstrap Alert to be displayed containing the given title and message
     * @param string $message The message itself
     * @param string $title (Optional) The title of the message block, may be unnecessary if only a message is needed
     * @return string a Bootstrap Alert containing the given HTML content
     */
    function generateMessage($message, $title = "") {
        // setup message content
        $messageContent = "";

        // if a title was given
        if(!empty($title)) {
            // display it
            $messageContent .= "<h2>{$title}</h2>
                                <hr>";
        }

        // add message to display
        $messageContent .= "<h4>{$message}</h4>";

        // place and return message content inside Bootstrap Alert
        return generateBootstrapAlert($messageContent);
    }

    /**
     * Generates and returns a Bootstrap Alert to be displayed containing the given HTML content
     * @param string $content The HTML content being displayed in the Bootstrap Alert
     * @return string a Bootstrap Alert containing the given HTML content
     */
    function generateBootstrapAlert($content) {
        return "<div class='row mx-1 mx-md-0'>
                    <div class='col-12'>
                        <div class='alert alert-light text-center mb-3 w-100 border' role='alert'>
                            {$content}
                        </div>
                    </div>
                </div>";
    }

    /**
     * Generates and returns a Bootstrap Toast greeting the user, if their name is stored in a cookie
     * @return string a Bootstrap Toast used to greet the user
     */
    function generateGreetingToast() {
        // if user's name is stored in a cookie
        if(isset($_COOKIE[NAME_KEY])) {
            // generate and display a greeting toast
            return generateBootstrapToast("greeting-toast"
                                          , "<p class='m-0'>Hello {$_COOKIE[NAME_KEY]}!</p>");
        }

        // otherwise return empty string
        return "";
    }

    /**
     * Generates and returns a Bootstrap Toast to be displayed containing the given HTML content
     * @param string $content The HTML content being displayed in the Bootstrap Toast
     * @return string a Bootstrap Toast containing the given HTML content
     */
    function generateBootstrapToast($toastID, $bodyContent) {
        return "<div class='toast-container position-fixed bottom-0 end-0 p-3'>
                    <div id='{$toastID}' class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-bs-delay='25000'>
                        <div class='toast-header'>
                            <img class='border border-2 rounded-circle me-2' src='/images/theZalmanian.jpg' 
                                height='30' alt='A forest with light streaming through'>
                            <strong class='me-auto'>theZalmanian</strong>
                            <small>just now</small>
                            <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'>
                            </button>
                        </div>
                        <div class='toast-body'>
                            {$bodyContent}
                        </div>
                    </div>
                </div>";
    }

    /******************
    ****** MySQL ******
    ******************/

    /**
     * Opens a connection to the DB, executes the given query, closes the DB connection, and returns the result
     *
     * @param string $query The SQL query to be executed
     * @return mixed a mysqli_result object for successful SELECT queries, and true/false for CREATE, UPDATE, and DELETE queries
     */
    function executeQuery($query) {
        // open connection to DB
        $dbConnection = connectDB();

        // execute query and capture result
        $result = mysqli_query($dbConnection, $query);

        // close connection to DB
        disconnectDB($dbConnection);

        return $result;
    }

    /**
     * Opens a connection to the DB, executes the given query, displays success or error message,
     * closes the DB connection, and returns the result
     *
     * @param string $query The SQL query to be executed
     * @return mixed a mysqli_result object for successful SELECT queries, and true/false for CREATE, UPDATE, and DELETE queries
     */
    function executeQueryDebugging($query) {
        // open connection to DB
        $dbConnection = connectDB();

        // execute query and capture result
        $result = mysqli_query($dbConnection, $query);

        // display success or fail
        if ($result) {
            echo "<p>Query successful!</p>";
        } else {
            echo "<p>Query failed" . mysqli_error($dbConnection)  . "</p>";
        }

        // close connection to DB
        disconnectDB($dbConnection);

        return $result;
    }
?>