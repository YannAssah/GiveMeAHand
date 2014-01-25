<?php
	try {
    	$dbh = new PDO('mysql:host=localhost;dbname=gmh', 'root', '');
	} catch (PDOException $e) {
    	print "Error!: " . $e->getMessage() . "<br/>";
    	die();
	}
?>