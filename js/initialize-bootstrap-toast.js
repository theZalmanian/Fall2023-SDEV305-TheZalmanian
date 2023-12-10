import * as helpers from './helpers.js';

"use strict";

/**
 * The key used to store the current user's name in a cookie
 */
const USER_NAME_KEY = "user-name";

// when the page loads
window.addEventListener("load", function() {  
    /**
     * Grab the greeting toast from page
     */
    const greetingToast = document.getElementById('greeting-toast');

    // get the user's name cookie from storage
    const userName = Cookies.get(USER_NAME_KEY);

    // if a name is stored
    if (userName) {
        // construct a new Bootstrap toast
        const newGreetingToast = bootstrap.Toast.getOrCreateInstance(greetingToast)
        
        // display it on the page
        newGreetingToast.show();
    }
});