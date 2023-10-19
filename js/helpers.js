export { setupButtonOnClick, getByID };

/**
 * Sets up an onclick event for the given button using the given function
 * @param {number} buttonID The button's id
 * @param useFunction The function to be called when button is clicked
 */
function setupButtonOnClick(buttonID, useFunction) {
    // get the button
    const button = getByID(buttonID);

    // set it's onclick event
    button.addEventListener("click", useFunction);
}

/**
 * Shortened form of the document.getElementById method
 * @param {string} elementID The element's id
 * @returns {HTMLElement} The corresponding HTML Element
 */
function getByID(elementID) {
    return document.getElementById(elementID);
}