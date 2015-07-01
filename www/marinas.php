<?php
	$not_require_auth = true;
	include_once('../backend/core.config.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('UX.head.php'); ?>
		<title>BoatDay App</title>
	</head>
	<body class="contact">
		<?php include_once('UX.section.header.php'); ?>

		<div class="container-fluid wrapper">

			<p class="intro2">Host Registration</p>
			<p class="sub-intro">Enter your phone number, area code and all, and we’ll text you a download link.</p>
			
			<div class="container block-space" >
				<form method="post" style="background:#f4f4f4;border-radius:8px;padding:10px;" action="https://backend.boatdayapp.com/core.proceed.php?form=marinas.create" role="form" class="col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-12 col-lg-offset-6">
				<!-- <form method="post" style="background:#f4f4f4;border-radius:8px;padding:10px;" action="http://127.0.0.1/com.boatdayapp/backend/core.proceed.php?form=marinas.create" role="form" class="col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-12 col-lg-offset-6"> -->

					<?php
						if(isset($_SESSION['errors'])) {
							echo '<div class="alert alert-danger" role="alert">';
							foreach($_SESSION['errors'] as $v) {
								echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> '.$v.'<br/>';
							}
							echo '</div>';
						}

						if(isset($_SESSION['success'])) {
							echo '<div class="alert alert-success" role="alert">'.$_SESSION['success'].'</div>';
						}
					?>
					<div class="form-group has-feedback">
						<input class="form-control input-lg" type="text" placeholder="Phone Number" <?php f('phone'); ?>  />
						<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input class="form-control input-lg" type="text" placeholder="Code" <?php f('marina'); ?>  />
						<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary btn-lg" value="Get download link" />
					</div>
				<form>
			</div>
		</div>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>

<?php shutdown(); ?>