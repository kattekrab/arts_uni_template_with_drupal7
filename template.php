<?php

// Show entire menu
function unitheme_preprocess_page(&$variables) 
{
	// Get the entire main menu tree
	$main_menu_tree = menu_tree_all_data('main-menu');
	
	// Add the rendered output to the $main_menu_expanded variable
	$variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
}


function unitheme_menu_tree($variables) 
{
	$html = "";
	
	$tree = $variables['tree'];
	$html = "<ul>$tree</ul>";

	return $html;
}


function unitheme_menu_link(array $variables) 
{
	$element = $variables['element'];
	$sub_menu = '';

	if ($element['#below']) {
		$sub_menu = drupal_render($element['#below']);
	}
	
	$output = l($element['#title'], $element['#href']);
	$link = "<li>". $output . $sub_menu . "</li>\n";
	
	return $link;
}


