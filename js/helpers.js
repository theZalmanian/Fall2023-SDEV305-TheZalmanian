export { setupOnClick, getByID };

/**
 * Sets up an onclick event for the given HTML element to execute the given function
 * @param {number} elementID The element's id
 * @param useFunction The function to be called when button is clicked
 */
function setupOnClick(elementID, useFunction) {
    // get the element using it's ID
    const element = getByID(elementID);

    // set it's onclick event
    element.addEventListener("click", useFunction);
}

/**
 * Shortened form of the document.getElementById method
 * @param {string} elementID The element's id
 * @returns {HTMLElement} The corresponding HTML Element
 */
function getByID(elementID) {
    return document.getElementById(elementID);
}