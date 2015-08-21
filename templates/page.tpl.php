<?php if ($page['header_utility']): ?>
	<div id="header-utility">
		<?php print render($page['header_utility']); ?>
	</div>
	<?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
		<div class="tabs"><?php print render($tabs); ?></div>
	<?php endif; ?>
<?php endif; ?>

<div id="page"<?php if($tabs = render($tabs)): ?>class="tabs-true"<?php endif; ?>>
	<?php if($page['sidebar_first']): ?>
		<div id="left">
			<?php print render($page['sidebar_first']); ?>
		</div>
	<?php endif; ?>
	
	<div id="main">
		<?php if($page['highlighted'] OR $messages){ ?>
			<div class="sys">
				<?php print render ($page['highlighted']); ?>
				<?php print $messages; ?>
			</div>
		<?php } ?>

		<?php if($page['breadcrumbs']): ?>
			<div id="breadcrumbs">
				<?php print render($page['breadcrumbs']); ?>
			</div>
		<?php endif; ?>
		<?php if ($title): ?>
			<h1 class="page-title"><?php print $title; ?></h1>
		<?php endif; ?>

		<?php print render($page['content_pre']); ?>
		<?php print render($page['content']); ?>
		<?php print render($page['content_post']); ?>

		<?php if ($page['content_footer']): ?>
			<div class="content-footer"><?php print render($page['content_footer']); ?></div>
		<?php endif; ?>

		<?php if ($page['comment_section']): ?>
			<div id="comments">
				<?php print render($page['comment_section']); ?>
			</div>
		<?php endif; ?>

		<?php if ($page['sidebar_second']): ?>
			<div id="right">
				<?php print render($page['sidebar_second']); ?>
			</div>
		<?php endif; ?>
	</div> <!--//main-->
	
	<?php if ($page['footer']): ?>
		<footer>
			<?php print render($page['footer']); ?>
		</footer>
	<?php endif; ?>

</div><!--//page-->