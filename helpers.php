<?php 
    /**
     * A collection of SVG icons commonly used across the site
     */
    $svgIcons = array(
        "GitHub" => "<svg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M 5 5 L 5 27 L 27 27 L 27 5 Z M 7 7 L 25 7 L 25 25 L 7 25 z' />
                        <path d='M 15.908203 9 C 11.989203 9 9 11.974766 9 15.884766 C 9 19.017766 10.967203 21.699578 13.783203 22.642578 C 14.148203 22.706578 14.275391 22.482781 14.275391 22.300781 C 14.275391 22.126781 14.267578 21.159453 14.267578 20.564453 C 14.267578 20.564453 12.283094 20.991656 11.871094 19.722656 C 11.871094 19.722656 11.547891 18.905406 11.087891 18.691406 C 11.087891 18.691406 10.444766 18.247859 11.134766 18.255859 C 11.134766 18.255859 11.833656 18.312328 12.222656 18.986328 C 12.840656 20.081328 13.878203 19.762078 14.283203 19.580078 C 14.346203 19.128078 14.530328 18.810906 14.736328 18.628906 C 13.157328 18.454906 11.5625 18.224719 11.5625 15.511719 C 11.5625 14.733719 11.776516 14.345703 12.228516 13.845703 C 12.156516 13.662703 11.911781 12.901781 12.300781 11.925781 C 12.895781 11.742781 14.251953 12.6875 14.251953 12.6875 C 14.814953 12.5365 15.424344 12.449219 16.027344 12.449219 C 16.630344 12.449219 17.241688 12.5365 17.804688 12.6875 C 17.804688 12.6875 19.160859 11.743781 19.755859 11.925781 C 20.143859 12.909781 19.897172 13.663703 19.826172 13.845703 C 20.278172 14.345703 20.556641 14.734719 20.556641 15.511719 C 20.556641 18.239719 18.8905 18.454906 17.3125 18.628906 C 17.5745 18.850906 17.796875 19.2715 17.796875 19.9375 C 17.796875 20.8895 17.789062 22.072734 17.789062 22.302734 C 17.789063 22.484734 17.916438 22.705578 18.273438 22.642578 C 21.088437 21.698578 23 19.017766 23 15.884766 C 23 11.974766 19.827203 9 15.908203 9 z'>
                        </path>
                    </svg>"
        , "LinkedIn" => "<svg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M 5 5 L 5 27 L 27 27 L 27 5 Z M 7 7 L 25 7 L 25 25 L 7 25 z' />
                            <path d='M 10.4375 8.71875 C 9.488281 8.71875 8.71875 9.488281 8.71875 10.4375 C 8.71875 11.386719 9.488281 12.15625 10.4375 12.15625 C 11.386719 12.15625 12.15625 11.386719 12.15625 10.4375 C 12.15625 9.488281 11.386719 8.71875 10.4375 8.71875 Z M 19.46875 13.28125 C 18.035156 13.28125 17.082031 14.066406 16.6875 14.8125 L 16.625 14.8125 L 16.625 13.5 L 13.8125 13.5 L 13.8125 23 L 16.75 23 L 16.75 18.3125 C 16.75 17.074219 16.996094 15.875 18.53125 15.875 C 20.042969 15.875 20.0625 17.273438 20.0625 18.375 L 20.0625 23 L 23 23 L 23 17.78125 C 23 15.226563 22.457031 13.28125 19.46875 13.28125 Z M 9 13.5 L 9 23 L 11.96875 23 L 11.96875 13.5 Z'>
                            </path>
                        </svg>"
    );

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
     * Generates and returns a Bootstrap Alert indicating to user that access was denied, and linking to given page
     * @param string $linkHref The links destination path
     * @param string $linkText The text to be displayed in the "button" link
     * @return string a Bootstrap Alert containing the given HTML content
     */
    function displayAccessDenied($linkHref, $linkText) {
        /**
         * An SVG of a shield with a lock, indicating lack of access
         */
        $lockIcon = "<svg xmlns='http://www.w3.org/2000/svg' width='65' height='65' fill='currentColor' class='bi bi-shield-lock-fill' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5'/>
                    </svg>";

        // place and return message content within Bootstrap Alert
        return generateMessageWithLink($linkHref, $linkText, $lockIcon, "Access Denied");
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
        return "<div class='col-12 alert alert-light text-center mb-3 mx-1 mx-md-0 w-100 border' role='alert'>
                    {$content}
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