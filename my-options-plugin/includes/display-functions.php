<?php

/************************************************************* 
* our display functions for outputting information 
**************************************************************/


function mo_add_content ($content) {
   
    global $mo_options;
   
    if (is_single() && $mo_options['enable'] == true) {
        $extra_content = '<p class="twitter-message ' . $mo_options['theme'] . '"><strong>Tweet me on</strong> <a href="' . $mo_options['twitter_url'] . '">Twitter</a></p>';

        
        $content .=  $extra_content;
   }
    return $content; 

}
add_filter('the_content', 'mo_add_content');



function mo_add_content_fb ($content) {
   
    global $mo_options_fb;
   
    if (is_single() && $mo_options_fb['postlink'] == true) {
        $extra_content = '<p class="facebook-message ' . $mo_options_fb['theme'] . '"><strong>Add me on</strong> <a href="' . $mo_options_fb['facebook_url'] . '">Facebook</a></p>';

        
        $content .=  $extra_content;
   }
    return $content; 

}
add_filter('the_content', 'mo_add_content_fb');



function mo_add_content_ig ($content) {
   
    global $mo_options_ig;
   
    if (is_single() && $mo_options_ig['check'] == true) {
        $extra_content = '<p class="instagram-message ' . $mo_options_ig['theme'] . '"><strong>Follow me on</strong> <a href="' . $mo_options_ig['instagram_url'] . '">Instagram</a></p>';

        
        $content .=  $extra_content;
   }
    return $content; 

}
add_filter('the_content', 'mo_add_content_ig');
