		<center>
			<?php 
			$data = array(
				'name' => 'frm1',
				'id' => 'frm1',
			);
			echo form_open('web/authenticate',$data);
			?>
			<br>
			Username
				<?php 
				$data = array(
				'name' => 'txtName',
				'id' => 'txtName',
				);
				echo form_input($data); ?>
			<br>
			Password
				<?php 
				$data = array(
					'type' => 'password',
					'name' => 'txtPassword',
					'id' => 'txtPassword',
				);
				echo form_input($data); ?>
				<br>
				<input type="submit" name="cmbButton" value="Send">
			<?php echo form_close(); ?>
			<a href="<?php echo site_url('web/create'); ?>">Create user</a>
	
		</center>
	