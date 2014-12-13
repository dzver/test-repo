<?php 

// this is just a test for a live beginners php/mysql demo
error_reporting( E_ALL );
session_start();

if (!isset($_SESSION['foo']))
	$_SESSION['foo']='3';
else
	$_SESSION['foo']++;

$conn = mysqli_connect( 'localhost', 'ljoljo', 'foo', 'secretsanta' );
if ( mysqli_connect_errno() ) {
	echo 'We are about to die;';
}
$results = mysqli_query( $conn, "INSERT INTO gifts (name) VALUES ('hi!')" );
echo mysqli_error( $conn );
echo $_SESSION['foo'];

