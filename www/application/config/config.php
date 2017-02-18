<?php

	$config['base_url'] = "http://localhost:8888/";
	$config['debug'] = False;

	$config['default_controller'] = 'page';
	$config['error_controller'] = 'error';

	$config['db_host'] = '';
	$config['db_name'] = '';
	$config['db_username'] = '';
	$config['db_password'] = '';

	$common_vendor = [""];

	if($config['debug']) {

		// Add additional script here
		// array_push($common_vendor, "dat.gui.js");

	}

	$config['vendor'] = $common_vendor;

?>
