import * as helpers from '../../js/helpers.js';

"use strict";

/**
 * The key used to store the current user's name in a cookie
 */
const NAME_KEY = "user-name";

// when the page loads
window.addEventListener("load", function() {  
    // get the user's name cookie from storage
    const userName = Cookies.get(NAME_KEY);

    // if a name is stored
    if (userName !== "undefined") {
        // display a greeting toast
        displayBootstrapToast();
    }
});


function displayBootstrapToast() {
    // construct a new Bootstrap toast
    const newGreetingToast = createBootstrapToast();
        
    // display it on the page
    newGreetingToast.show();
}

/**
 * Constructs and returns a Bootstrap Toast using the greeting toast HTML generated on current page
 * @returns The newly created Bootstrap Toast
 */
function createBootstrapToast() {
    /**
     * The greeting toast generated on page
     */
    const greetingToast = helpers.getByID('greeting-toast');

    // construct and return a new Bootstrap toast using the greeting toast's content
    return bootstrap.Toast.getOrCreateInstance(greetingToast);
}