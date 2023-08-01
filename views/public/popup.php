<?php $background_url = plugins_url('upexi-age-verification-popup/assets/images/Rectangle-popup.png'); ?>

<div id="age-verification-popup" class="closed">
    <div class="container">
        <div class="img-container" style="background-image: url('<?php echo $background_url; ?>')">
            <img src="<?php echo plugins_url('upexi-age-verification-popup/assets/images/astronaut.png'); ?>" alt="Upexi Logo">
        </div>
        <div class="popup-lower">
            <h2>WAIT! Before we take off...</h2>
            <p>Please confirm that you are at least 21 years old to access this site.</p>
            <button id="confirm-age">I AM 21 YEARS OR OLDER</button>
            <button id="deny-age">I AM UNDER 21 YEARS OLD</button>
            <span style="font-size:10px;color:grey">
                <a style="color:grey" href="https://www.bing.com" target="_blank">Privacy Policy</a> | <a href="https://www.bing.com" style="color:grey" target="_blank">Terms of Service</a>
            </span>
        </div>
    </div>

</div>