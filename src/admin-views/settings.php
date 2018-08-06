<?php
/**
 * Template for settings page
 */

$user_roles = $this->get_user_roles();

unset( $settings['fields']['tribe_community_events_wrapper_closer'] );

$settings['fields']['charge_heading'] = array(
	'type' => 'html',
	'html' => '<h3>' . esc_html__( 'Charge for Submissions', 'tribe-ext-charge-for-submitting-featuring-events' ) . '</h3>',
);

// Charge for single events

$settings['fields']['charge_single_event'] = array(
	'type' => 'checkbox_bool',
	'label' => esc_html__( 'Charge for single event submissions', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'Check this box if you wish to charge users per event submission', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => false,
	'validation_type' => 'boolean',
	'parent_option' => self::OPTIONNAME,
);

$settings['fields']['charge_single_event_cost'] = array(
	'type' => 'text',
	'label' => esc_html__( 'Cost per event', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'Cost for one event submission credit. The currency selected in your WooCommerce settings will be used.', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => '',
	'validation_type' => 'positive_int',
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => true,
);

$settings['fields']['charge_single_event_user_roles'] = array(
	'type' => 'checkbox_list',
	'label' => esc_html__( 'Single event submission allowed user roles', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'Select roles to limit this feature to certain groups of users. If no roles are checked, all roles will have this capability.', 'tribe-events-community-tickets' ),
	'default' => 'none',
	'validation_type' => 'options',
	'options' => $user_roles,
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => false,
);

// Charge for single featured events

$settings['fields']['charge_single_featured_event'] = array(
	'type' => 'checkbox_bool',
	'label' => esc_html__( 'Charge for single featured event submissions', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'Check this box if you wish to charge users per featured event submission', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => false,
	'validation_type' => 'boolean',
	'parent_option' => self::OPTIONNAME,
);

$settings['fields']['charge_single_featured_event_cost'] = array(
	'type' => 'text',
	'label' => esc_html__( 'Cost per featured event', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'Cost for one featured event submission credit. The currency selected in your WooCommerce settings will be used.', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => '',
	'validation_type' => 'positive_int',
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => true,
);

$settings['fields']['charge_single_featured_event_user_roles'] = array(
	'type' => 'checkbox_list',
	'label' => esc_html__( 'Single featured event submission allowed user roles', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'What type of fee will be charged on a per-ticket basis?', 'tribe-events-community-tickets' ),
	'default' => 'none',
	'validation_type' => 'options',
	'options' => $user_roles,
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => false,
);

// Subscription for event submission

$settings['fields']['charge_event_subscription'] = array(
	'type' => 'checkbox_bool',
	'label' => esc_html__( 'Charge for standard subscriptions', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'Check this box if you wish to allow users to subscribe to submit events', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => false,
	'validation_type' => 'boolean',
	'parent_option' => self::OPTIONNAME,
);

$settings['fields']['charge_event_subscription_cost'] = array(
	'type' => 'text',
	'label' => esc_html__( 'Cost for standard subscription', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'Cost for user to subscribe to submit events. The currency selected in your WooCommerce settings will be used.', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => '',
	'validation_type' => 'positive_int',
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => true,
);

$settings['fields']['charge_event_subscription_term_quantity'] = array(
	'type' => 'text',
	'label' => esc_html__( 'Term quantity', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( '--description--', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => '',
	'validation_type' => 'positive_int',
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => true,
);

$settings['fields']['charge_event_subscription_term_type'] = array(
	'type' => 'dropdown',
	'label' => esc_html__( 'Subscription term', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'What type of fee will be charged on a per-ticket basis?', 'tribe-events-community-tickets' ),
	'default' => 'none',
	'validation_type' => 'options',
	'options' => array(
		'day' => esc_html__( 'Day', 'tribe-ext-charge-for-submitting-featuring-events' ),
		'week' => esc_html__( 'Week', 'tribe-ext-charge-for-submitting-featuring-events' ),
		'month' => esc_html__( 'Month', 'tribe-ext-charge-for-submitting-featuring-events' ),
		'year' => esc_html__( 'Year', 'tribe-ext-charge-for-submitting-featuring-events' ),
	),
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => false,
);

$settings['fields']['charge_event_subscription_user_roles'] = array(
	'type' => 'checkbox_list',
	'label' => esc_html__( 'Event subscription allowed user roles', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'What type of fee will be charged on a per-ticket basis?', 'tribe-events-community-tickets' ),
	'default' => 'none',
	'validation_type' => 'options',
	'options' => $user_roles,
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => false,
);

// Subscription for featured event submission

$settings['fields']['charge_featured_event_subscription'] = array(
	'type' => 'checkbox_bool',
	'label' => esc_html__( 'Charge for featured subscriptions', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'Check this box if you wish to allow users to subscribe to submit featured events', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => false,
	'validation_type' => 'boolean',
	'parent_option' => self::OPTIONNAME,
);

$settings['fields']['charge_featured_event_subscription_cost'] = array(
	'type' => 'text',
	'label' => esc_html__( 'Cost for featured subscription', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'Cost for user to subscribe to submit featured events. The currency selected in your WooCommerce settings will be used.', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => '',
	'validation_type' => 'positive_int',
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => true,
);

$settings['fields']['charge_featured_event_subscription_term_quantity'] = array(
	'type' => 'text',
	'label' => esc_html__( 'Term quantity', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( '--description--', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'default' => '',
	'validation_type' => 'positive_int',
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => true,
);

$settings['fields']['charge_featured_event_subscription_term_type'] = array(
	'type' => 'dropdown',
	'label' => esc_html__( 'Subscription term', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'What type of fee will be charged on a per-ticket basis?', 'tribe-events-community-tickets' ),
	'default' => 'none',
	'validation_type' => 'options',
	'options' => array(
		'day' => esc_html__( 'Day', 'tribe-ext-charge-for-submitting-featuring-events' ),
		'week' => esc_html__( 'Week', 'tribe-ext-charge-for-submitting-featuring-events' ),
		'month' => esc_html__( 'Month', 'tribe-ext-charge-for-submitting-featuring-events' ),
		'year' => esc_html__( 'Year', 'tribe-ext-charge-for-submitting-featuring-events' ),
	),
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => false,
);

$settings['fields']['charge_featured_event_subscription_user_roles'] = array(
	'type' => 'checkbox_list',
	'label' => esc_html__( 'Featured event subscription allowed user roles', 'tribe-ext-charge-for-submitting-featuring-events' ),
	'tooltip' => esc_html__( 'What type of fee will be charged on a per-ticket basis?', 'tribe-events-community-tickets' ),
	'default' => 'none',
	'validation_type' => 'options_multi',
	'options' => $user_roles,
	'parent_option' => self::OPTIONNAME,
	'can_be_empty' => true,
);

$settings['fields']['tribe_community_events_wrapper_closer'] = array(
	'type' => 'html',
	'html' => '</div>',
);



























