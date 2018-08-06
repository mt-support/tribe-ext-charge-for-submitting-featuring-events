console.log( 'level 1 added level 2' );
// var tribe_events_community_events_charging_admin = {
// 	event: {}
// };
( function( $ ) {
	'use strict';

	/**
	 * initializes the JS logic
	 */
	function init_jen() {

		var charge_single_event = $( 'input[name="charge_single_event"]' );
		var charge_single_event_cost = $( 'input[name="charge_single_event_cost"]' );

		var charge_single_featured_event = $( 'input[name="charge_single_featured_event"]' );
		var charge_single_featured_event_cost = $( 'select[name="charge_single_featured_event_cost"]' );

		var charge_event_subscription = $( 'select[name="charge_event_subscription"]' );
		var charge_event_subscription_cost = $( 'select[name="charge_event_subscription_cost"]' );
		var charge_event_subscription_term_quantity = $( 'select[name="charge_event_subscription_term_quantity"]' );
		var charge_event_subscription_term_type = $( 'select[name="charge_event_subscription_term_type"]' );

		var charge_featured_event_subscription = $( 'select[name="charge_featured_event_subscription"]' );
		var charge_featured_event_subscription_cost = $( 'select[name="charge_featured_event_subscription_cost"]' );
		var charge_featured_event_subscription_term_quantity = $( 'select[name="charge_featured_event_subscription_term_quantity"]' );
		var charge_featured_event_subscription_term_type = $( 'select[name="charge_featured_event_subscription_term_type"]' );

		var form = charge_single_event.closest( 'form' );

		charge_single_event.on( 'change', charge_single_event_cost, function() {
				 $( '#tribe-field-charge_single_event_cost' ).toggleClass( 'charge-single-event-enabled' );
				console.log( 'wefd' );
			}
		);

	};



	init_jen();

	/**
	 * initialize this JS file's logic when the document is ready
	 */
	// $( function() {
	// 	init();
	// } );
} ) ( jQuery );
// } )( jQuery, tribe_events_community_tickets_admin );