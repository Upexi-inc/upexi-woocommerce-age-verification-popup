<?php
    wp_enqueue_style('age_verfiication_styles', plugins_url('../../assets/styles/popup.css', __FILE__), array(), '1.0.0');
?>

<div id="age-verification-popup">
    <h2>Age Verification</h2>
    <p>Please confirm that you are at least 21 years old to access this site.</p>
    <button id="confirm-age">I am 21 or older</button>
</div>

<script>
    // JavaScript code to handle the age verification logic
    document.getElementById('confirm-age').addEventListener('click', function() {
        //set cookie and/or local storage here
        document.cookie = 'age_verified=true; path=/';
        
        // Remove the popup from the DOM
        document.getElementById('age-verification-popup').remove();
    });
</script>
