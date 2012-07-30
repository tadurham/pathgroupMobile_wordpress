<?php 
    add_filter('show_admin_bar', '__return_false');

    remove_action('wp_footer', 'wpmp_switcher_wp_footer');
?>