# OneSignal-WordPress-Plugin-Sample

This is a very simple example demonstrating how to create a WordPress plugin. The WP plugin will be adding some HTML into all of our blog post. The HTML added will look like the following:

<p class="follow-us">If you liked this article, then please follow me
    <a href="http://twitter.com/phpmx" title="WPBeginner on Twitter" target="_blank" rel="nofollow">Twitter</a>
    <img src="https://pbs.twimg.com/profile_images/1431129476151357441/AZmUEptx_400x400.jpg" width="40"/>
</p>

## How to create a WordPress Plugin?
The first step to create a folder where the code of you WP plugin is going to live. Then create a `.php` file with the name of your plugin Eg. `my-fist-plugin.php`.

Every WordPress plugin needs to contain the plugin information. Add the following code to you plugin php file and enter the information you want for your plugin. You can edit all the fields below.

```php
<?php
/*
Plugin Name:  PHP Social Plugin
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
```

Now, we need to create a PHP function that will only render the social media information when a single post is being displayed.

```php
function phpmx_follow_us($content) {
 
    if ( is_single() ) {    
        $content .= '<p class="follow-us">If you liked this article, then please follow me
                        <a href="http://twitter.com/phpmx" title="WPBeginner on Twitter" target="_blank" rel="nofollow">Twitter</a>
                        <img src="https://pbs.twimg.com/profile_images/1431129476151357441/AZmUEptx_400x400.jpg"/>
                    </p>';   
    } 

    return $content; 
     
}
```

The [is_single()](https://developer.wordpress.org/reference/functions/is_single/) method will make sure our html is only render one a single post is displayed

```php
add_filter('the_content', 'phpmx_follow_us'); 
```

The [add_filter()](https://developer.wordpress.org/reference/functions/add_filter/) method adds a callback function to a filter hook.

