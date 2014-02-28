<?php

	class load {

		/**
		 * [to_use Load necessary class for the project]
		 * @param  [type] $array [ array with class path names using underscore ( _ ) notation ]
		 * @return [type]        [ no return ]
		 */
		public static function __construct( $array ) {

			if ( is_numeric ( $array ) )

				return false;

			if ( ! is_array( $array ) )

				$classes = array( $array );

			foreach ( $classes as $class ) {

				$path = str_replace( '_', '/', $class );
				get_template_part( $path );

			}

		}

	}

?>