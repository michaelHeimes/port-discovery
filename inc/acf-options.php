<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_set_options_page_title') ) {
	acf_set_options_page_title( __('Theme Options') );
}