<?php 
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
        return "<div class='alert alert-light text-center my-3 border' role='alert'>
                    {$content}
                </div>";
    }
?>