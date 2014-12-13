<?php
require_once( 'config.php' );

class DB {
	static $conn;

	function __construct() {
		if ( self::$conn )
			return;

		self::$conn = mysqli_connect( HOST, USER, PASS, DB );
		if ( mysqli_connect_errno( self::$conn ) ) {
			$this->error( mysqli_error( self::$conn ) );
		}
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

	function error( $error ) {
		// todo
		die( $error );
	}
}
