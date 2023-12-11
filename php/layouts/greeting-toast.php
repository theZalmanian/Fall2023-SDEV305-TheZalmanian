<?php echo generateGreetingToast(); ?>

<!--Initialize greeting toast through JS-->
<script type="module" src="/js/initialize-bootstrap-toast.js"></script>

<?php
    /**
     * Generates and returns a Bootstrap Toast greeting the user for 10s, if their name is stored in a cookie
     * @return string a Bootstrap Toast displaying a greeting to the user
     */
    function generateGreetingToast() {
        // if user's name is stored in a cookie
        if(isset($_COOKIE[NAME_KEY])) {
            // generate greeting using name in cookie
            $greeting = "<p class='m-0'>Hello {$_COOKIE[NAME_KEY]}!</p>";

            // generate and display a greeting toast on the page for 10s
            return generateBootstrapToast("greeting-toast", $greeting, 10000);
        }

        // otherwise return empty string
        return "";
    }

    /**
     * Generates and returns a Bootstrap Toast to be displayed containing the given HTML content
     * @param string $toastID The ID attribute being added to the toast, used to initialize it in JS
     * @param string $bodyContent The HTML content being displayed in the Bootstrap Toast
     * @param int $delay The # of milliseconds the toast is visible on the page before it is removed
     * @return string a Bootstrap Toast containing the given HTML content
     */
    function generateBootstrapToast($toastID, $bodyContent, $delay) {
        return "<div class='toast-container position-fixed bottom-0 end-0 p-3'>
                    <div id='{$toastID}' class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-bs-delay='{$delay}'>
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
?>