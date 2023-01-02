<?php 

	require('functions.php');
	require('Database.php');
	// require('router.php');
	$config = require('config.php');
	$config = require('config.php');

	$db = new Database($config['database']);
	$email = "maruficepustian@gmail.com";
	$name = "Maruf Hossain";
	$query = "select * from admin WHERE name = :name";
	$posts = $db->query($query, [":name" => $name])->fetch();
	dd($posts);
?>
