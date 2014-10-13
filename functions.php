<?php

/*-----------------------------------------------------------------------------------*/
/*	Columns
/*-----------------------------------------------------------------------------------*/
function minti_one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}

function minti_one_third_last( $atts, $content = null ) {
   return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}

function minti_two_third_last( $atts, $content = null ) {
   return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}

function minti_one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}

function minti_one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}

function minti_three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_one_fifth( $atts, $content = null ) {
   return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}

function minti_one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_two_fifth( $atts, $content = null ) {
   return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}

function minti_two_fifth_last( $atts, $content = null ) {
   return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_three_fifth( $atts, $content = null ) {
   return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}

function minti_three_fifth_last( $atts, $content = null ) {
   return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_four_fifth( $atts, $content = null ) {
   return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}

function minti_four_fifth_last( $atts, $content = null ) {
   return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_one_sixth( $atts, $content = null ) {
   return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}

function minti_one_sixth_last( $atts, $content = null ) {
   return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function minti_five_sixth( $atts, $content = null ) {
   return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
}

function minti_five_sixth_last( $atts, $content = null ) {
   return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}


/* ----------------------------------------------------- */
/* Pre Process Shortcodes */
/* ----------------------------------------------------- */

function pre_process_shortcode($content) {
    global $shortcode_tags;
 
    // Backup current registered shortcodes and clear them all out
    $orig_shortcode_tags = $shortcode_tags;
    remove_all_shortcodes();
    
    
    add_shortcode('one_third', 'minti_one_third');
	add_shortcode('one_third_last', 'minti_one_third_last');
	add_shortcode('two_third', 'minti_two_third');
	add_shortcode('two_third_last', 'minti_two_third_last');
	add_shortcode('one_half', 'minti_one_half');
	add_shortcode('one_half_last', 'minti_one_half_last');
	add_shortcode('one_fourth', 'minti_one_fourth');
	add_shortcode('one_fourth_last', 'minti_one_fourth_last');
	add_shortcode('three_fourth', 'minti_three_fourth');
	add_shortcode('three_fourth_last', 'minti_three_fourth_last');
	add_shortcode('one_fifth', 'minti_one_fifth');
	add_shortcode('one_fifth_last', 'minti_one_fifth_last');
	add_shortcode('two_fifth', 'minti_two_fifth');
	add_shortcode('two_fifth_last', 'minti_two_fifth_last');
	add_shortcode('three_fifth', 'minti_three_fifth');
	add_shortcode('three_fifth_last', 'minti_three_fifth_last');
	add_shortcode('four_fifth', 'minti_four_fifth');
	add_shortcode('four_fifth_last', 'minti_four_fifth_last');
	add_shortcode('one_sixth', 'minti_one_sixth');
	add_shortcode('one_sixth_last', 'minti_one_sixth_last');
	add_shortcode('five_sixth', 'minti_five_sixth');
	add_shortcode('five_sixth_last', 'minti_five_sixth_last');
	
 
    // Do the shortcode (only the one above is registered)
    $content = do_shortcode($content);
 
    // Put the original shortcodes back
    $shortcode_tags = $orig_shortcode_tags;
 
    return $content;
}

 
add_filter('the_content', 'pre_process_shortcode', 7);

// Allow Shortcodes in Widgets
add_filter('widget_text', 'pre_process_shortcode', 7);

?>
