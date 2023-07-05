<?php
    wp_enqueue_style('age_verification_styles', plugins_url('../../assets/styles/popup.css', __FILE__), array(), '1.0.0');
?>

<div id="age-verification-popup">
    <h2>Age Verification</h2>
    <p>Please confirm that you are at least 21 years old to access this site.</p>
    <button id="confirm-age">I am 21 or older</button>
</div>

<script>
    // JavaScript code to handle the age verification logic

    // Check if age verification is required
    if (!localStorage.getItem('age_verified')) {
        // Show the age verification popup
        document.getElementById('age-verification-popup').style.display = 'block';
        
        // Add event listener to handle verification
        document.getElementById('confirm-age').addEventListener('click', function() {
            // Store verification status in local storage
            localStorage.setItem('age_verified', 'true');
            console.log('Age verified');
            // Remove the popup from the DOM
            document.getElementById('age-verification-popup').style.display = 'none';
        });
    }
</script>
