<?php
/*
Plugin Name: SPS Plugin by Ramona Eid
Plugin URI: http://www.checklistme.com/Bio.html
Description: Do NOT deactivate or delete.  Necessary plugin for SPS functionality.
Version: 0.0.4
Author: Ramona Eid
Author URI: http://www.checklistme.com/Bio.html
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Test Domain: my-toolset

SPS Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

SPS Plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with SPS Plugin. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'init', 'grasscrete_init' );

function grasscrete_init() {
    include( plugin_dir_path(__FILE__) . 'admin/grasscrete-admin.php' );
    
    /*wp_register_script($id, $path, $dependencies, $version, $in_footer);*/
    wp_register_script( 'grasscrete-full', plugins_url('js/grasscrete_full.js', __FILE__), array('jquery'), '080816', true );
    
    add_action( 'wp_enqueue_scripts', 'grasscrete_enqueue_scripts' );
    add_action( 'wp_enqueue_scripts', 'grasscrete_check_unsemantic', 99999 );
    add_action( 'wp_enqueue_scripts', 'grasscrete_check_fontawesome', 99999 );

    include_once( 'github-plugin-updater/updater.php' );

    define( 'WP_GITHUB_FORCE_UPDATE', true );

    if ( is_admin() ) {
        
        $config = array(
            'slug'                  => plugin_basename( __FILE__ ),
            'proper_folder_name'    => 'grasscrete-necessary',
            'api_url'               => 'https://api.github.com/repos/RamonaEid/PluginSPS',
            'raw_url'               => 'https://raw.github.com/RamonaEid/PluginSPS/master',
            'github_url'            => 'https://github.com/RamonaEid/PluginSPS',
            'zip_url'               => 'https://github.com/RamonaEid/PluginSPS/zipball/master',
            'sslverify'             => true,
            'requires'              => '3.0',
            'tested'                => '3.3',
            'readme'                => 'README.md',
            'access_token'          => ''
        );
        
        new WP_GitHub_Updater( $config );
        
    }

}

function grasscrete_enqueue_scripts() {
    //wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
    wp_enqueue_script( 'grasscrete-full', plugins_url('js/grasscrete_full.js', __FILE__), array('jquery'), '080816', true );


}