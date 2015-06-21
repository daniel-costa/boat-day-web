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

			<p class="intro2">Contact us</p>
			<p class="sub-intro">Interested in joining BoatDay? Already a user?  We we welcome all of your feedback!</p>
			
			<div class="container block-space" >
				<form method="post" style="background:#f4f4f4;border-radius:8px;padding:10px;" action="http://backend.boatdayapp.com/core.proceed.php?form=contact.create" role="form" class="col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-12 col-lg-offset-6">

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
						<input class="form-control input-lg" type="text" placeholder="First Name" <?php f('firstname'); ?> />
						<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
					</div>
					<div class="form-group">
						<input class="form-control input-lg" type="text" placeholder="Last Name" <?php f('lastname'); ?>  />
					</div>
					<div class="form-group has-feedback">
						<input class="form-control input-lg" type="email" placeholder="Email" <?php f('email'); ?>  />
						<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input class="form-control input-lg" type="text" placeholder="Phone Number" <?php f('phone'); ?>  />
						<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<textarea class="form-control input-lg" name="feedback" rows="5" placeholder="Tell us what’s on your mind . . . "><?php t('feedback'); ?></textarea>
						<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary btn-lg" value="Send" />
					</div>
				<form>
			</div>
		</div>

		<?php include_once('UX.section.footer.php'); ?>
		<?php include_once('UX.scripts.php'); ?>
	</body>
</html>

<?php shutdown(); ?>