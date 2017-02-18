<?php

class Controller {

	public function loadModel($name)
	{
		require_once(APP_DIR .'models/'. strtolower($name) .'.php');

		$model = new $name;
		return $model;
	}

	public function loadView($name)
	{
		$view = new View($name);
		return $view;
	}

	public function loadPlugin($name)
	{
		require(APP_DIR .'plugins/'. strtolower($name) .'.php');
	}

	public function loadHelper($name)
	{
		require(APP_DIR .'helpers/'. strtolower($name) .'.php');
		$helper = new $name;
		return $helper;
	}

	public function redirect($loc)
	{
		global $config;

		header('Location: '. $config['base_url'] . $loc);
	}

	// --------------------------

	public function initPage($viewID, $path, $pageID) {

		global $config;

		// TODO
		// $viewID, $path, can be optimized

		// echo "viewID: " . $viewID . "<br>";
		// echo "path: " . $path;

		$template = $this->loadView($viewID);
		$template->set('pageID', $pageID);
		$template->set('vendor', $config['vendor']);
		$template->set('lpath', $path);
		$template->render();

	}

}

?>
