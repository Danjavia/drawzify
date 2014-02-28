/**
* Controller: draw
*/
( function( $, window, document, view, model, utilities ) {

	var draw = Gillie.Controller.extend({

		// Called on instantiation
		initialize: function() {

		}

	});

	// Global Exposition
	window.App.Controllers.draw = new draw();


})( this.jQuery, this, this.document, this.App.Views.draw, this.App.Models.draw, this.App.Helpers.Utilities );
