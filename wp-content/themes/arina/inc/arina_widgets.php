<?php

	function arina_widgets_init() {
	//Default Sidebar
	register_sidebar(array(
	  'name' => esc_html__( 'Default Sidebar', 'arina' ),
	  'id' => 'sidebar-left',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'arina' ),
	  'before_widget'=>'<div id="%1$s" class="mrside abc sidebar blog-sidebar widget sidebar-widget %2$s "><div class="widget-content">',
	  'after_widget'=>'</div></div>',
	  'before_title' => '<div class="sidebar-title"><h4>',
	  'after_title' => '</h4></div>'
	));
	//Default Footer Sidebar
	  register_sidebar(array(
		  'name' => esc_html__( 'Main Footer Sidebar', 'arina' ),
		  'id' => 'footer-sidebar',
		  'description' => esc_html__( 'Widgets in this area will be shown in Footer Area.', 'arina' ),
		  'before_widget'=>'<div id="%1$s" class="mrfooter col-md-4 col-sm-4 col-xs-12 footer-column footer-widget %2$s">',
		  'after_widget'=>'</div>',
		  'before_title' => '<h2 class="widget-title footer_title foote_title_one">',
		  'after_title' => '</h2>'
		));

}
add_action( 'widgets_init', 'arina_widgets_init' );