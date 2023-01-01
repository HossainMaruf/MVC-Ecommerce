<?php 
	
	// dump and die
	function dd($value) {
		echo "<pre>";
		var_dump($value);
		echo "<pre>";
		die();
	}

	// check URL
	function urlIs($url) {
		return $_SERVER[REQUEST_URI] == $url;
	}


?>