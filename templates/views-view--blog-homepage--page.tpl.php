<div id="blogroll">
	<?php if ($title): ?>
		<h1><?php print $title ?></h1>
	<?php endif; ?>

	<?php if ($header): ?>
		<header><?php print $header; ?></header>
	<?php endif; ?>

	<?php if ($exposed): ?>
		<div class="filters"><?php print $exposed; ?></div>
	<?php endif; ?>

	<?php if ($attachment_before): ?>
		<div class="attach-before"><?php print $attachment_before; ?></div>
	<?php endif; ?>

	<?php if ($rows): ?>
		<?php print $rows; ?>
	<?php elseif ($empty): ?>
		<div class="empty"><?php print $empty; ?></div>
	<?php endif; ?>

	<?php if ($pager): ?>
		<?php print $pager; ?>
	<?php endif; ?>

	<?php if ($attachment_after): ?>
		<div class="attach-after"><?php print $attachment_after; ?></div>
	<?php endif; ?>

	<?php if ($footer): ?>
		<footer><?php print $footer; ?></footer>
	<?php endif; ?>
</div>