<?php 
	
	include_once('core.config.php');

	$breadcrumb = Array(
		array(null, 'SMS sent')
	);
	
	$accounts = array();
	$p = getPagination("SELECT id, creation, number FROM sms ORDER BY creation DESC");
	$stmt = $p['stmt'];
	$stmt->execute();
	$stmt->bind_result($id, $creation, $number);
	while($stmt->fetch()) {
		$accounts[] = array(
			'id' => $id, 
			'creation' => getDateFromTimestamp($creation), 
			'number' => $number
		);
	}
	$stmt->close();

	include_once('UX_admin.header.php');
?>

	<table class="table table-striped table-bordered">
		<tr>
			<th class="<?php echo $UX_table_col_actions ?>">Actions</th>
			<th>Phone number</th>
			<th>Date</th>
		</tr>
		<?php if(count($accounts) == 0) { ?>
			<tr><td colspan="3">Empty</td></tr>
		<?php } foreach($accounts as $line) { ?>
			<tr>
				<td class="text-center">
					<a href="admin.sms.delete.php?id=<?php echo $line['id']; ?>" label="<?php echo $line['number'].' sent '.$line['creation']; ?>" class="ctrl-delete btn btn-xs <?php if($line['validated']) echo ' disabled' ?>"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
				<td><?php echo $line['number']; ?></td>
				<td><?php echo $line['creation']; ?></td>
			</tr>
		<?php } ?>
	</table>

<?php include_once('UX_admin.footer.php'); ?>