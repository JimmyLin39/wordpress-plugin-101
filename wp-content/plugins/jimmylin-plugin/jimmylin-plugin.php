<?php
/**
 * @package JimmylinPlugin
 */
 /*
 Plugin Name: Jimmylin Plugin
 Plugin URI: http://jimmylin.com/plugin
 Description: This is a test wordpress plugin.
 Version: 1.0.0
 Author: Jimmy Lin
 Author URI: http://jimmylin.com
 License: GPLv2 or later
 Text Domain: jimmylin-plugin
 */

 /*
 Copyright (C) yyyy  name of author

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// kill outside script
if (! defined( 'ABSPATH' )) {
  die;
}

// if (! function_exists('add_action')) {
//   die;
// }

class JimmyLinPlugin
{
  function activate() {
    echo 'plugin is activated';
    // generated a CPT
    // flush rewrite rules
  }

  function deactivate() {
    echo 'plugin is deactivated';
    // flush rewrite rules
  }

  function uninstall() {
    // delete CPT
    // delete all the plugin data from the DB
  }
}

if ( class_exists('JimmyLinPlugin') ) {
  $jimmylinPlugin = new JimmyLinPlugin();
}

// activation
register_activation_hook(__FILE__, array( $jimmylinPlugin, 'activate' ));

// deactivation
register_deactivation_hook(__FILE__, array( $jimmylinPlugin, 'deactivate' ));