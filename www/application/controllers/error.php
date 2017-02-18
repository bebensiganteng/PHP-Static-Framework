<?php

class Error extends Controller {

	function index($id = null)
	{

		$pageID = "error";

		$template = $this->loadView($pageID);
		$template->set('pageID', $pageID);
		$template->render();
	}

}

?>
