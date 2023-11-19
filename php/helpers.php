<?php 
    /**
     * Returns a Bootstrap Alert to be displayed containing the given title and message, 
     * along with the given link styled as a button at the bottom
     * @param string $linkHref The links destination path
     * @param string $linkText The text to be displayed in the "button" link
     * @param string $title The title of the message block
     * @param string $message (Optional) The message itself, may be unnecessary if only a title is needed
     * @return string a Bootstrap Alert containing the given HTML content
     */
    function displayMessageWithLink($linkHref, $linkText, $title, $message = "") {
        // setup message content
        $messageContent = "<h2>{$title}</h2>
                           <hr>
                           <h4>{$message}</h4>
                           <hr>
                           <a class='btn py-2 m-2 border' href='{$linkHref}'>{$linkText}</a>";

        // place and return message content inside Bootstrap Alert
        return displayBootstrapAlert($messageContent);
    }

    /**
     * Returns a Bootstrap Alert to be displayed containing the given title and message
     * @param string $title The title of the message block
     * @param string $message (Optional) The message itself, may be unnecessary if only a title is needed
     * @return string a Bootstrap Alert containing the given HTML content
     */
    function displayMessage($title, $message = "") {
        // setup message content
        $messageContent = "<h2>{$title}</h2>
                           <hr>
                           <h4>{$message}</h4>";

        // place and return message content inside Bootstrap Alert
        return displayBootstrapAlert($messageContent);
    }

    /**
     * Returns a Bootstrap Alert to be displayed containing the given HTML content
     * @param string $content The HTML content being displayed in the Bootstrap Alert
     * @return string a Bootstrap Alert containing the given HTML content
     */
    function displayBootstrapAlert($content) {
        return "<div class='alert alert-light text-center my-3 border' role='alert'>
                    {$content}
                </div>";
    }
?>