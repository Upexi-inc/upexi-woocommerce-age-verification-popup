// Helper functions to deal with localStorage
// Function to set a value in localStorage
function setItem(key, value) {
    try {
        if (typeof value === 'object') {
            value = JSON.stringify(value);
        }
        localStorage.setItem(key, value);
    } catch (error) {
        console.error('Local Storage Set Error: ', error);
    }
}

// Function to get a value from localStorage
function getItem(key) {
    try {
        let value = localStorage.getItem(key);
        try {
            // Attempt to parse the value as JSON. If it fails, it's a primitive.
            value = JSON.parse(value);
        } catch (error) {
            // Value is not JSON, do nothing and return it as is
        }
        return value;
    } catch (error) {
        console.error('Local Storage Get Error: ', error);
        return null;
    }
}

// JavaScript code to handle the age verification logic
(function() {
    // Function to handle age confirmation
    function handleAgeConfirmation(popup, btn) {
        btn.addEventListener('click', function() {
            // Store verification status in local storage
            setItem('age_verified', 'true');
            
            // Remove the popup from the DOM if it exists and it has 'closed' class
            if (popup && popup.classList.contains('closed')) {
                popup.classList.remove('closed');
                popup.remove();
            }
        });
    }

    // Check if age verification is required
    const popup = document.getElementById('age-verification-popup');
    const btn = document.getElementById('confirm-age');
    console.log(popup);
    if (!getItem('age_verified') && popup && btn) {
        handleAgeConfirmation(popup, btn);
    } else {
        console.warn('Age verification elements not found in the DOM.');
    }
})();


