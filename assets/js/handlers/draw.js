/**
* Handler: draw
*/
( function( $, window, document, view, controller, utilities ) {

	var draw = Gillie.Handler.extend({

		// Bind events
		events: {

		}

	});

	// Global Exposition
	window.App.Handlers.draw = new draw();


})( this.jQuery, this, this.document, this.App.Views.draw, this.App.Controllers.draw, this.App.Helpers.Utilities );

