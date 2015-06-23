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
}