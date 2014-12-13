<?php 

// this is just a test for a live beginners php/mysql demo
error_reporting( E_ALL );

$conn = mysqli_connect( 'localhost', 'ljoljo', 'foo', 'secretsanta' );
if ( mysqli_connect_errno() ) {
	echo 'We are about to die;';
}
$results = mysqli_query( $conn, "INSERT INTO gifts (name) VALUES ('hi!')" );
echo mysqli_error( $conn );

