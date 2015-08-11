<?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
	<h3><?php print $block->subject; ?></h3>
<?php endif; ?>
<?php print render($title_suffix); ?>
<?php print $content; ?>