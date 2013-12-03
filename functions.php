<?php
/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/rewrites.php');        // URL rewriting for assets
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions

add_action('bcn_after_fill', 'foo_pop');
function foo_pop($trail)
{
  if(is_page('page_foo'))
  {
    array_pop($trail->trail);
  }
}

add_filter('salesforce_w2l_cc_admin_email_list','salesforce_add_emails');

function salesforce_add_emails( $emails ){

$emails[]='dagresta-ungaro@alteva.com';
$emails[]='dgrooms@alteva.com';
$emails[]='graham2m@gmail.com';

return $emails;
}