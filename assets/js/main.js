// Helper functions to deal with localStorage
console.log("userId", userData.userID);
//localStorage.removeItem('age_verified');
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

(function() {
    // Function to handle age confirmation
    function handleAgeConfirmation(popup, btn) {
        btn.addEventListener('click', function() {
            console.log('clicked');
            // Store verification status in local storage
            setItem('age_verified', userData.userID);
            popup.classList.add('closed');
        });
    }

    // Check if age verification is required
    const popup = document.getElementById('age-verification-popup');
    const btn = document.getElementById('confirm-age');
    const deny = document.getElementById('deny-age');

    console.log(getItem('age_verified'), "yoooooo");

    //remove the age_verified item from local storage

    deny.addEventListener('click', function() {
        //send the user to bing.com
        window.location.href = "https://www.bing.com";
    });

    // Check if the current user is the same as the one stored in localStorage
    if (getItem('age_verified') !== parseInt(userData.userID) || getItem('age_verified') == null) {
        // If the users are not the same or 'age_verified' is not present, remove the 'closed' class from the popup
        if (popup && btn) {
            popup.classList.remove('closed');
            handleAgeConfirmation(popup, btn);
        } else {
            console.warn('Age verification elements not found in the DOM.');
        }
    } 
})();
