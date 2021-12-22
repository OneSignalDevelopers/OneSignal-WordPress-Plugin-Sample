<?php
/*
Plugin Name:  PHP MX Social Plugin
Plugin URI:   https://onesignal.com 
Description:  Test plugin
Version:      1.0
Author:       DevPato 
Author URI:   https://twitter.com/devpato
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  OneSignal
Domain Path:  /languages
*/

function phpmx_follow_us($content) {
 
    if ( is_single() ) {    
        $content .= '<p class="follow-us">If you liked this article, then please follow me
                        <a href="http://twitter.com/phpmx" title="WPBeginner on Twitter" target="_blank" rel="nofollow">Twitter</a>
                        <img src="https://pbs.twimg.com/profile_images/1431129476151357441/AZmUEptx_400x400.jpg"/>
                    </p>';   
    } 

    return $content; 
     
}

add_filter('the_content', 'phpmx_follow_us'); 
    
    