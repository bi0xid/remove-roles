<?php 

/**
 * Remove built in roles for Ultimate Members.
 *
 * Plugin Name: Remove built in roles
 * Plugin URI:  https://bi0xid.es/plugins/remove-built-in-roles
 * Description: Removes all roles except administrator from web. Useful if you use a plugin like Ultimate Members to create your own roles.
 * Version:     1.0
 * Author:      Rafa Poveda
 * Author URI:  https://bi0xid.es
 * License:     License: GPLv2 or later
 */


add_action('admin_menu', 'remove_built_in_roles');

function remove_built_in_roles() {
    global $wp_roles;

    $roles_to_remove = array('subscriber', 'contributor', 'author', 'editor');

    foreach ($roles_to_remove as $role) {
        if (isset($wp_roles->roles[$role])) {
            $wp_roles->remove_role($role);
        }
    }
}