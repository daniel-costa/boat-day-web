<?php 
	
	include_once('core.config.php');

	$breadcrumb = Array(
		array(null, 'Contact forms')
	);
	
	$accounts = array();
	$p = getPagination("SELECT id, creation, firstname, lastname, phone, email, feedback FROM contact ORDER BY creation DESC");
	$stmt = $p['stmt'];
	$stmt->execute();
	$stmt->bind_result($id, $creation, $firstname, $lastname, $phone, $email, $feedback);
	while($stmt->fetch()) {
		$accounts[] = array(
			'id' => $id, 
			'creation' => $creation, 
			'name' => $firstname.' '.$lastname, 
			'phone' => $phone, 
			'email' => $email, 
			'feedback' => $feedback
		);
	}
	$stmt->close();

	include_once('UX_admin.header.php');
?>

	<table class="table table-striped table-bordered">
		<tr>
			<th class="<?php echo $UX_table_col_actions ?>">Actions</th>
			<th>From</th>
			<th>Phone</th>
			<th>Email</th>
		</tr>
		<?php if(count($accounts) == 0) { ?>
			<tr><td colspan="2">Empty</td></tr>
		<?php } foreach($accounts as $line) { ?>
			<tr>
				<td class="text-center">
					<a href="mailto:<?php echo $line['email']; ?>" class="btn btn-xs"><span class="glyphicon glyphicon-envelope"></span></a>&#160;
					<a href="#" label="<?php echo htmlspecialchars($line['feedback']); ?>" class="ctrl-info btn btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a>&#160;
				</td>
				<td><?php echo $line['name']; ?></td>
				<td><?php echo $line['phone']; ?></td>
				<td><?php echo $line['email']; ?></td>
			</tr>
		<?php } ?>
	</table>

<?php include_once('UX_admin.footer.php'); ?>