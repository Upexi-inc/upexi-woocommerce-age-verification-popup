// Helper functions to deal with localStorage

// Function to set a value in localStorage
function setItem(key, value) {
    try {
        const now = new Date();
        if (typeof value === 'object') {
            value = JSON.stringify(value);
        }
        localStorage.setItem(key, JSON.stringify({value: value, timestamp: now.getTime()}));
    } catch (error) {
        console.error('Local Storage Set Error: ', error);
    }
}

// Function to get a value from localStorage
function getItem(key) {
    try {
        let item = localStorage.getItem(key);
        try {
            // Attempt to parse the value as JSON. If it fails, it's a primitive.
            item = JSON.parse(item);
            const now = new Date();
            const expiryDate = new Date(item.timestamp + 2 * 7 * 24 * 60 * 60 * 1000); // Add two weeks to the timestamp
            if (now > expiryDate) {
                localStorage.removeItem(key);
                return null;
            } else {
                return item.value;
            }
        } catch (error) {
            // Value is not JSON, do nothing and return it as is
            return item;
        }
    } catch (error) {
        console.error('Local Storage Get Error: ', error);
        return null;
    }
}

// Uncomment the line below to remove the 'age_verified' item from localStorage for testing purposes
//localStorage.removeItem('age_verified');

// JavaScript code to handle the age verification logic
(function() {
    // Function to handle age confirmation
    function handleAgeConfirmation(popup, btn) {
        btn.addEventListener('click', function() {
            console.log('clicked');
            // Store verification status in local storage
            setItem('age_verified', 'true');

            popup.classList.add('closed');
            
            // Remove the popup from the DOM if it exists and it has 'closed' class
            // if (popup && popup.classList.contains('closed')) {
            //     popup.classList.remove('closed');
            //     popup.remove();
            // }
        });
    }

    // Check if age verification is required
    const popup = document.getElementById('age-verification-popup');
    const btn = document.getElementById('confirm-age');
    
    if (!getItem('age_verified') && popup && btn) {
        popup.classList.remove('closed');
        handleAgeConfirmation(popup, btn);
    } else {
        console.warn('Age verification elements not found in the DOM.');
    }
})();
