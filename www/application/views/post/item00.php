<?php

	// ticker is used to prevent controller.php from calling the include directive
	if(!isset($ticker)) include(APP_DIR .'views/header.php');

?>

<h1>Item 00</h1>

<?php

	// ticker is used to prevent controller.php from calling the include directive
	if(!isset($ticker)) {

		include(APP_DIR .'views/footer.php');

	}
?>
