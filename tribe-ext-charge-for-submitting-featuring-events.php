<?php
/**
 * Plugin Name:       Community Events Extension: Charge for Submitting and Featuring Events
 * Plugin URI:        https://theeventscalendar.com/extensions/---the-extension-article-url---/
 * GitHub Plugin URI: https://github.com/mt-support/tribe-ext-charge-for-submitting-featuring-events
 * Description:       Charge users for the ability to submit events through the front end form and/or feature their events.
 * Version:           1.0.0
 * Extension Class:   Tribe__Extension__Community_Events_Charging
 * GitHub Plugin URI: https://github.com/mt-support/tribe-ext-charge-for-submitting-featuring-events
 * Author:            Modern Tribe, Inc.
 * Author URI:        http://m.tri.be/1971
 * License:           GPL version 3 or any later version
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       tribe-ext-charge-for-submitting-featuring-events
 *
 *     This plugin is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     any later version.
 *
 *     This plugin is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *     GNU General Public License for more details.
 */

// Do not load unless Tribe Common is fully loaded and our class does not yet exist.
if (
	class_exists( 'Tribe__Extension' )
	&& ! class_exists( 'Tribe__Extension__Community_Events_Charging' )
) {
	/**
	 * Extension main class, class begins loading on init() function.
	 */
	class Tribe__Extension__Community_Events_Charging extends Tribe__Extension {

		/**
		 * Setup the Extension's properties.
		 *
		 * This always executes even if the required plugins are not present.
		 */
		public function construct() {
			// Requirements and other properties such as the extension homepage can be defined here.
			$this->add_required_plugin( 'Tribe__Events__Main', '4.3' );
			$this->add_required_plugin( 'Tribe__Events__Community__Main', '4.5' );
			// $this->add_required_plugin( 'WooCommerce', '3.4' );
		}

		/**
		 * Extension initialization and hooks.
		 */
		public function init() {
			// Load plugin textdomain
			// Don't forget to generate the 'languages/tribe-ext-charge-for-submitting-featuring-events.pot' file
			load_plugin_textdomain( 'tribe-ext-charge-for-submitting-featuring-events', false, basename( dirname( __FILE__ ) ) . '/languages/' );

			/**
			 * Protect against fatals by specifying the required minimum PHP
			 * version. Make sure to match the readme.txt header.
			 * All extensions require PHP 5.6+, following along with https://theeventscalendar.com/knowledgebase/php-version-requirement-changes/
			 *
			 * Delete this paragraph and the non-applicable comments below.
			 *
			 * Note that older version syntax errors may still throw fatals even
			 * if you implement this PHP version checking so QA it at least once.
			 *
			 * @link https://secure.php.net/manual/en/migration56.new-features.php
			 * 5.6: Variadic Functions, Argument Unpacking, and Constant Expressions
			 *
			 * @link https://secure.php.net/manual/en/migration70.new-features.php
			 * 7.0: Return Types, Scalar Type Hints, Spaceship Operator, Constant Arrays Using define(), Anonymous Classes, intdiv(), and preg_replace_callback_array()
			 *
			 * @link https://secure.php.net/manual/en/migration71.new-features.php
			 * 7.1: Class Constant Visibility, Nullable Types, Multiple Exceptions per Catch Block, `iterable` Pseudo-Type, and Negative String Offsets
			 *
			 * @link https://secure.php.net/manual/en/migration72.new-features.php
			 * 7.2: `object` Parameter and Covariant Return Typing, Abstract Function Override, and Allow Trailing Comma for Grouped Namespaces
			 */
			$php_required_version = '5.6';

			if ( version_compare( PHP_VERSION, $php_required_version, '<' ) ) {
				if (
					is_admin()
					&& current_user_can( 'activate_plugins' )
				) {
					$message = '<p>';

					$message .= sprintf( __( '%s requires PHP version %s or newer to work. Please contact your website host and inquire about updating PHP.', 'match-the-plugin-directory-name' ), $this->get_name(), $php_required_version );

					$message .= sprintf( ' <a href="%1$s">%1$s</a>', 'https://wordpress.org/about/requirements/' );

					$message .= '</p>';

					tribe_notice( $this->get_name(), $message, 'type=error' );
				}

				return;
			}

			add_filter( 'tribe_community_settings_tab', array( $this, 'ce_charging_settings' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'register_assets' ) ); //styles not showing
		}

/* -------------------------------------------------------------------------------------------------------------*/

		/**
		 * option name to save all plugin options under
		 * as a serialized array
		 * jen move to Settings.php
		 */
		const OPTIONNAME = 'tribe_ext_charge_for_submitting_featuring_events_options';

		/**
		 * The script's handle.
		 */
		public $handle = 'tribe-ext-charge-for-submitting-featuring-events';

		/**
		 * Check that the require users to login to submit events setting is enabled
		 */
		public function users_must_login() {


		}

		public function get_allowed_user_roles( $option ) {
			$roles_option = $option . '_user_roles';
			self::get_options( $roles_option );

			return $roles;
		}



		/**
		 * Check what the current user can do based on their role and what is enabled. Returns the allowed options.
		 * Might need to do something different to account for child roles - for example, if a subscriber role can
		 * submit events, should an editor also be able to without the editor role being explicitly enabled?
		 * @return array
		 */
		public function user_can_access() {



			// return $options;
		}

		/**
		 *
		 */
		public function create_single_event_credit() {
			// custom stuff
		}

		/**
		 *
		 */
		public function create_single_featured_event_credit() {
			// custom stuff
		}

		/**
		 *
		 */
		public function create_single_event_subscription_credit() {
			// custom stuff
		}

		/**
		 *
		 */
		public function create_single_featured_event_subscription_credit() {
			// custom stuff
		}

		/**
		 * Get list of user roles
		 * @return array
		 */
		public function get_user_roles() {
			if ( ! function_exists( 'get_editable_roles' ) ) {
			    require_once ABSPATH . 'wp-admin/includes/user.php';
			}

			$roles = get_editable_roles();
			$role_names = array();

			foreach ( $roles as $role => $name ) {
				$role_names[] = $role['name'];
			}
			// $role_names = array( 'option1', 'option 2', 'option3' );
			return $role_names;
		}

		/**
		 * Filter the community settings tab to include community tickets settings
		 *
		 * @param $settings array Field settings for the community settings tab in the dashboard
		 */
		public function ce_charging_settings( $settings ) {
			include 'src/admin-views/settings.php';

			return $settings;
		}

		/**
		 * Register this extension's asset(s).
		 * jen change this to load on only the Community Tab and not on all admin pages
		 */
		public function register_assets() {
			$resources_url = trailingslashit( plugin_dir_url( __FILE__ ) ) . 'src/resources/';
			$js = $resources_url . 'js/tribe-events-community-charging-admin.js';
			$css = $resources_url . 'css/tribe-events-community-charging-admin.css';

			wp_enqueue_script(
				'tribe-events-community-charging-admin',
				$js
			);

			wp_register_style( $this->handle, $css );
			wp_enqueue_style( $this->handle );
		}

		public function get_options( $option ) {
			$the_option = self::OPTIONNAME;
			$options = get_option( $the_option );
			return $single_option = $options[ $option ];
		}





























	} // end class
} // end if class_exists check
