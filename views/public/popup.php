<?php $background_url = plugins_url('upexi-age-verification-popup/assets/images/Rectangle-popup.png'); ?>
<link href="https://fonts.cdnfonts.com/css/roboto-condensed" rel="stylesheet">
<div id="age-verification-popup" class="closed">
    <div class="container">
        <div class="img-container" style="background-image: url('<?php echo $background_url; ?>')">
            <img src="<?php echo plugins_url('upexi-age-verification-popup/assets/images/astronaut.png'); ?>" alt="Upexi Logo">
        </div>
        <div class="popup-lower">
            <h2>WAIT! Before we take off...</h2>
            <div class="age-disclaimer">
                <p>Please confirm that you are at least 21 years old to access this site.</p>
            </div>
            <button id="confirm-age">I AM 21 YEARS OR OLDER</button>
            <button id="deny-age">I AM UNDER 21 YEARS OLD</button>
            <span>
                <a href="<?php echo esc_url(get_privacy_policy_url()); ?>" target="_blank">Privacy Policy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="<?php echo esc_url(get_permalink(121)); ?>" target="_blank">Terms of Service</a>
            </span>

        </div>
    </div>

</div>