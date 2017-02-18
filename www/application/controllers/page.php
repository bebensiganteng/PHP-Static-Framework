<?php

class Page extends Controller {

	function index($viewID, $path, $pageID)
	{

		$this->initPage($viewID, $path, $pageID);

	}
}

?>
