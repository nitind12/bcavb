		<center>
			<?php 
			$data = array(
				'name' => 'frmCreate',
				'id' => 'frmCreate',
			);
			echo form_open('web/submit',$data);
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
				<input type="submit" name="cmbButton" value="Create User">
			<?php echo form_close(); ?>
			<br>
			<?php
				if($this->session->userdata('msg_')){
					echo $this->session->userdata('msg_');
				}
			?>	
		</center>
	