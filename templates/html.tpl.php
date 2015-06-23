<!DOCTYPE html>
<html class="no-js">
	<head>
		<title><?php print $head_title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="dns-prefetch" href="//use.typekit.com">
		<script src="//use.typekit.net/lxg7dnd.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<?php print $styles; ?>
		<?php print $scripts; ?>
	</head>
	<body>
		<a href="#main" class="invisible focusable"><?php print t('Skip to main content'); ?></a>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
	</body>
</html>