<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $phone ) ) > 0 ) : ?>
    <p>
        <i class="fa fa-phone" aria-hidden="true"></i>
        <a><?php echo $phone; ?></a>
    </p>
<?php endif; ?>

<?php if ( strlen( trim( $email ) ) > 0 ) : ?>
    <p>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <a><?php echo $email; ?></a>
    </p>
<?php endif; ?>

<?php if ( strlen( trim( $street_address ) ) > 0 ) : ?>
    <p>
        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <?php echo $street_address; ?>
            <br>
            <?php echo $city; ?>, <?php echo $province; ?> <?php echo $postal_code; ?>
    </p>
<?php endif; ?>