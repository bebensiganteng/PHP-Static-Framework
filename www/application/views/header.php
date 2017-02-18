<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="true" />
	<title>PHP Static Demo</title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!-- CSS, webpack include the css in the js -->
	<!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/<?php echo $pageID ?>.css" type="text/css" media="screen" /> -->
	<!-- END CSS -->

	<!-- JS TEST --->
	<?php

		if(isset($vendor)) {

			foreach ($vendor as &$value) {

				if(!empty($value)) {

				?>

					<script src="<?php echo BASE_URL; ?>static/vendor/<?php echo $value ?>"></script>

				<?php

				}
			}

		}

	?>
	<!-- END JS -->

</head>
<body>
	<div class="menu">
		<a href="<?php echo BASE_URL; ?>" target="_self">Home</a>
		<a href="<?php echo BASE_URL; ?>contact/" target="_self">Contact</a>
		<a href="<?php echo BASE_URL; ?>post/item00/" target="_self">Post/Item00</a>
	</div>
