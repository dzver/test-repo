<?php
require_once( '../config/config.php' );

class DB {
	static $conn;

	function __construct() {
		if ( self::$conn )
			return;

		self::$conn = mysqli_connect( HOST, USER, PASS, DB );
	}

	function query( $sql ) {
		mysqli_query( self::$conn, $sql ); 
		return mysqli_affected_rows( self::$conn );
	}

	function get_results( $sql ) {
		$result = mysqli_query( self::$conn, $sql ); 
		if ( ! $result )
			return;

		while ( $row = mysqli_fetch_assoc( $result ) ) {
			$return[] = $row;
		}

		return $result;
	}

	function prepare() {
		$args = func_get_args();

		// todo
	}

	function error() {
		// todo
	}
}
