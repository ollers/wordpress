<?php

 $clearfix_class = array('clearfix');

?>

<article id="post-0" <?php post_class($clearfix_class); ?>>
	<div class="no-questions">
		<?php _e('No task added yet! Be the first to add a task.', 'ap'); ?>		
		<?php ap_ask_btn() ?>
	</div>
</article><!-- list item -->
