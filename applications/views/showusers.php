<center>
	<div class="row">
		<div class="col-sm-6">
	<table border="1" class="table">
		<tr>
			<th>Users</th>
			<th>Action</th>
		</tr>
<?php
		foreach ($users as $item) { ?>
			<tr>
				<td><?php echo $item->USERNAME_;?></td>
				<td>Edit | Delete</td>
			</tr>
		<?php } ?>
	</table>
			</div>
		</div>
</center>