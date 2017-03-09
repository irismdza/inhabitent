<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $phone ) ) > 0 ) : ?>
    <div class="contact-phone">
        <div class="contact-info-icon">
            <i class="fa fa-phone" aria-hidden="true"></i>
        </div>
        <div>
            <a><?php echo $phone; ?></a>
        </div>
    </div>
<?php endif; ?>

<?php if ( strlen( trim( $email ) ) > 0 ) : ?>
    <div class="contact-email">
        <div class="contact-info-icon">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </div>
        <div>
            <a><?php echo $email; ?></a>
        </div>
    </div>
<?php endif; ?>

<?php if ( strlen( trim( $street_address ) ) > 0 ) : ?>
    <div class="contact-address">
        <div class="contact-info-icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
        </div>
        <div>
            <p><?php echo $street_address; ?></p>
            <p><?php echo $city; ?>, <?php echo $province; ?> <?php echo $postal_code; ?></p>
        </div>
    </div>
<?php endif; ?>