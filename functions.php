<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function top_widgets_init() {

	register_sidebar( array(
			'name'          => 'Top widget area',
			'id'            => 'top_widgets_1',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'top_widgets_init' );

// Add search function

function template_chooser($template)
{
	global $wp_query;
	$post_type = get_query_var('post_type');
	if( $wp_query->is_search && $post_type == 'estate' )
	{
		return locate_template('estate-search.php');  //  redirect to archive-search.php
	}
	return $template;
}
add_filter('template_include', 'template_chooser');