<?php

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
