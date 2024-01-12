import * as helpers from '../../js/helpers.js';

"use strict";

// when the page loads
window.addEventListener('load', function () {
    // setup accordion to respond to page resizing 
    window.addEventListener('resize', toggleResumeAccordion);

    // setup accordion when page first loads, in case user is on mobile
    toggleResumeAccordion();
})

/**
 * The standard mobile breakpoint is 576px
 */ 
const MOBILE_BREAKPOINT = 576;

/**
 * Returns true if the current window is <= 576px; otherwise false
 */ 
function screenIsMobile() {
    return window.innerWidth < MOBILE_BREAKPOINT;
}

/**
 * Toggles the resume accordion when called
 */
function toggleResumeAccordion() {
    toggleResponsiveAccordion("resume-info");
}

/**
 * If the screen is currently mobile sized, closes all accordion items in the requirements accordion.
 * Otherwise, opens or keeps all accordion items open.
 * @param {string} accordionID The ID of the accordion being toggled
 */
function toggleResponsiveAccordion(accordionID) {   
    /**
     * All accordion items in the given accordion
     */
    const accordionItems = helpers.getByID(accordionID).querySelectorAll('.accordion-item');

    // run through all items in the given accordion
    accordionItems.forEach((currItem) => {
        // get the button that handles the collapse from the current item
        const collapseButton = currItem.querySelector('.accordion-button')

        // get the div that handles the collapse from the current item
        const collapseDiv = currItem.querySelector('.accordion-collapse')

        // if the screen is currently mobile-sized
        if (screenIsMobile()) {
            // close the current accordion item
            collapseButton.classList.add('collapsed');
            collapseDiv.classList.remove('show');
        } 
        
        // if the screen size changed, but is not small enough to be considered mobile 
        else {
            // open the current accordion item
            collapseButton.classList.remove('collapsed');
            collapseDiv.classList.add('show');
        }
    });
}