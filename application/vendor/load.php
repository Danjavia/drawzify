<?php

	class load {

		/**
		 * [to_use Load necessary class for the project]
		 * @param  [type] $array [ array with class path names using underscore ( _ ) notation ]
		 * @return [type]        [ no return ]
		 */
		public static function file ( $array ) {

			if ( is_numeric ( $array ) )

				return false;

			if ( ! is_array( $array ) )

				$array = array( $array );

			$classes = $array;

			foreach ( $classes as $class ) {

				$path = str_replace( '.', '/', $class );
				require_once( $path . '.php' );

			}

		}

	}

?>