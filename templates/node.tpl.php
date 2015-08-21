<?php if (!$page): ?>
	<h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
<?php endif; ?>
<?php
	hide($content['comments']);
	hide($content['links']);
	print render($content);
?>