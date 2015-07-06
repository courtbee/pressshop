<?php

//REMOVES THE JS SETTINGS -- MAY NEED TO RE-ENABLE
function pressshop_js_alter (&$js) {
	unset($js['settings']);
}

function pressshop_preprocess_page(&$vars,$hook) {
	//REMOVES WELCOME MESSAGE
	if($vars['is_front']) {
	    $vars['title']="";
	    unset($vars['page']['content']['system_main']['default_message']);
	}

	//SERVES UP VARIABLE FOR PAGE CLASS
	$path = drupal_get_path_alias();
	$path_bits = explode('/', $path);
	$section_name = $path_bits[0];

	if (!empty($section_name)) {
		$vars['sectionName'] = $section_name;
	}
}

//function pressshop_adjust_classes_for_page() {
//	$path = drupal_get_path_alias();
//	$parsed = drupal_parse_url($path);
//
//	return $parsed[0];
//}

//INJECTS CLASS INTO MENU TREES
function pressshop_menu_tree__menu_blog_tags(&$variables) {
	return '<ul class="dropdown">' . $variables['tree'] . '</ul>';
}