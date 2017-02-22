<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('monday_friday'); ?>">Monday-Friday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('monday_friday'); ?>" name="<?php echo $this->get_field_name('monday_friday'); ?>" type="text" value="<?php echo $monday_friday; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('saturday'); ?>">Saturday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('saturday'); ?>" name="<?php echo $this->get_field_name('saturday'); ?>" type="text" value="<?php echo $saturday; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('sunday'); ?>">Sunday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('sunday'); ?>" name="<?php echo $this->get_field_name('sunday'); ?>" type="text" value="<?php echo $sunday; ?>">
   </p>

</div>
