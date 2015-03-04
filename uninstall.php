<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
    exit();

delete_option("mc_pop_mm_data");
delete_option("mc_pop_mm_user_email");
delete_option("mc_pop_mm_user_password");
delete_option("mc_pop_mm_guest_user");
?>
