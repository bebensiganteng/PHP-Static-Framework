<?php

function pip()
{

	global $config;

  // Set our defaults
  $controller 	= $config['default_controller'];
	$pageID 			= "home";
	$subpaths 		= $pageID;
  $action 			= "index";
  $url 					= '';

	// Get request url and script url
	$request_url 	= (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
	$script_url  	= (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';

	// Remove query string
	$request_url 	= preg_replace('/\?.*/', '', $request_url);

	// Get our url path and trim the / of the left and the right
	if($request_url != $script_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');

	// Split the url into segments
	$segments = explode('/', $url);

	// get full paths of view and controller
	if(!empty($segments[0])) {

		$pageID 	= $segments[0];
		$subpaths = "";

		foreach ($segments as &$value) {

			$subpaths .= "/" . $value;
			$pageID = $value;

		}

	}

	// Get our controller and view path
	$controllerPath = APP_DIR . 'controllers/' . $controller . '.php';
	$viewPath 			= APP_DIR . 'views/' . $subpaths . '.php';

  // Check the view exists
  if(!method_exists($controller, $action) && !file_exists($viewPath)){

      $controller = $config['error_controller'];
      require_once(APP_DIR . 'controllers/' . $controller . '.php');
      $action = 'index';

  } else {

		require_once($controllerPath);

	}

	// Create object and call method
	$obj = new $controller;

	die(
		call_user_func_array(
			array($obj, $action),
			array($subpaths, $url, $pageID)
		)
	);

}

?>
