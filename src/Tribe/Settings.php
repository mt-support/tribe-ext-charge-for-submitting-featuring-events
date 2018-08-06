<?php

// Do not load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if ( ! class_exists( 'Tribe_CE_Charge_Settings' ) ) {
	class Tribe_CE_Charge_Settings {
		/**
		 * Community Events Charging settings class
		 *
		 * @package Tribe__Extension__Community_Events_Charging
		 * @author Modern Tribe Inc.
		 * @since  1.0
		 */

		/**
		 * setting to charge users to submit single events
		 * @var bool
		 */
		public $chargeSingleEvents = ;

		/**
		 * setting to charge users to submit featured single events
		 * @var bool
		 */
		public $chargeSingleFeaturedEvents;

		/**
		 * setting to charge users to subscribe to submit single events
		 * @var bool
		 */
		public $chargeEventSubscription;

		/**
		 * setting to charge users to subscribe to feature single events
		 * @var bool
		 */
		public $chargeFeaturedEventSubscription;

		/**
		 * setting for roles that can submit events
		 * @var array
		 */
		public $submitEventsRoles;

		/**
		 * setting for roles that can submit featured events
		 * @var array
		 */
		public $submitFeaturedEventsRoles;

		/**
		 * setting for roles that can subscribe to submit events
		 * @var array
		 */
		public $subscribeSubmitEventsRoles;

		/**
		 * setting for roles that can subscribe to submit featured events
		 * @var array
		 */
		public $subscribeSubmitFeaturedEventsRoles;

		// 						JEN MOVE ALL OF THIS TO SETTINGS.PHP

		/**
		 * setting to charge users to submit single events
		 * @var bool
		 */
		// public $chargeSingleEvent = $this->get_options( 'charge_single_event' );

		/**
		 * setting to charge users to submit single events
		 * @var bool
		 */
		public $chargeSingleEventCost;

		/**
		 * setting to charge users to submit featured single events
		 * @var bool
		 */
		public $chargeSingleFeaturedEvent;

		/**
		 * setting to charge users to submit single events
		 * @var bool
		 */
		public $chargeSingleFeaturedEventCost;

		/**
		 * setting to charge users to subscribe to submit single events
		 * @var bool
		 */
		public $chargeEventSubscription;

		/**
		 * setting to charge users to subscribe to submit single events
		 * @var bool
		 */
		public $chargeEventSubscriptionCost;

		/**
		 * setting to charge users to subscribe to feature single events
		 * @var bool
		 */
		public $chargeFeaturedEventSubscription;

		/**
		 * setting to charge users to subscribe to feature single events
		 * @var bool
		 */
		public $chargeFeaturedEventSubscriptionCost;

		/**
		 * setting to charge users to subscribe to feature single events
		 * @var bool
		 */
		public $chargeFeaturedEventSubscriptionCostTerm;

		/**
		 * setting to charge users to subscribe to feature single events
		 * @var bool
		 */
		public $chargeFeaturedEventSubscriptionTermQuantity;

		/**
		 * setting to charge users to subscribe to feature single events
		 * @var bool
		 */
		public $chargeFeaturedEventSubscriptionTermType;

		/**
		 * setting for roles that can submit events
		 * @var array
		 */
		public $submitEventsRoles;

		/**
		 * setting for roles that can submit featured events
		 * @var array
		 */
		public $submitFeaturedEventsRoles;

		/**
		 * setting for roles that can subscribe to submit events
		 * @var array
		 */
		public $subscribeSubmitEventsRoles;

		/**
		 * setting for roles that can subscribe to submit featured events
		 * @var array
		 */
		public $subscribeSubmitFeaturedEventsRoles;



		//						JEN END MOVE

























	}
}