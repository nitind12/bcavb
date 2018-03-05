		<center>
			
			<div class="row">
				<div class="col-sm-6">
					<table class="table">
						<tr>
							<th>SNO</th>
							<th>User</th>
							<th>Status</th>
						</tr>
						<?php $sno = 1; ?>
						<?php foreach ($users as $item) { ?>
							<td><?php echo $sno; ?></td>
							<td><?php echo $item->USERNAME_; ?></td>
							<?php $sno++; ?>
						<?php } ?>
					</table>
				</div>
			</div>
		</center>
	