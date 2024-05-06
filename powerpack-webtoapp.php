<?php
/*
Plugin Name: PowerPack WebToApp
Version: 1.0
Description: Extension that allows you to manipulate content by displaying it on a browser or mobile application.
Author: Ilias Assadki -- PowerPack
*/
 
// Add a custom hook to modify the OS display options in PowerPack
function powerpack_webtoapp_custom_hook() {
    // Adds custom options for OS
    add_filter( 'ppe_os_display_condition_options', 'powerpack_webtoapp_custom_os_options_filter', 10, 1 );
    add_filter( 'ppe_os_display_condition_check', 'powerpack_webtoapp_custom_os_options_check_filter', 10, 1 );
}

// Filter OS display options for PowerPack
function powerpack_webtoapp_custom_os_options_filter( $oses ) {
    // Add your custom option
    $oses['mobile_app'] = 'App-WebView';
    return $oses;
}

// Filter OS check options for PowerPack
function powerpack_webtoapp_custom_os_options_check_filter( $oses ) {
    // Ajoute ton option personnalisée
    $oses['mobile_app'] = 'App-WebView';
    return $oses;
}

// Add hooks when WordPress is initialized
add_action( 'init', 'powerpack_webtoapp_custom_hook' );


