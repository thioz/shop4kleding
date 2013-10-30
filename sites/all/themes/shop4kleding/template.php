<?php

drupal_add_css(drupal_get_path('theme', 'shop4kleding') . '/fancybox/jquery.fancybox.css', array('group' => CSS_THEME, 'type' => 'file'));


//drupal_add_js('/sites/all/libraries/jquery/jquery-1.10.1.min.js');
drupal_add_js(drupal_get_path('theme', 'shop4kleding') . '/fancybox/jquery.fancybox.pack.js');
drupal_add_js(drupal_get_path('theme', 'shop4kleding') . '/js/shopinit.js');

function shop4kleding_preprocess_page(&$variables)
{
	// Get the entire main menu tree
	$main_menu_tree = menu_tree_all_data('main-menu');

	// Add the rendered output to the $main_menu_expanded variable
	$variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
}

function shop4kleding_js_alter(&$javascript)
{
	//We define the path of our new jquery core file //assuming we are using the minified version 1.9.1 
	$jquery_path = drupal_get_path('theme', 'shop4kleding') . '/js/jquery-1.10.1.min.js';
	//We duplicate the important information from the Drupal one 
	$javascript[$jquery_path] = $javascript['misc/jquery.js'];
	//..and we update the information that we care about 
	$javascript[$jquery_path]['version'] = '1.10.1';
	$javascript[$jquery_path]['data'] = $jquery_path;
	//Then we remove the Drupal core version 
	unset($javascript['misc/jquery.js']);
}