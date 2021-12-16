<div class="box-form">
	<div class="login-box" id="main">
		<div id="login">
			<h2>Registration</h2>
			<hr/>
			<?php
			echo "<div class='error_msg'>";
				echo validation_errors();
			echo "</div>";
			echo form_open('user_authentication/signup'); 

			echo "<div class='user-box'>";
			echo form_input('username');
			echo "<label>Username</label>";
			echo "<div class='error_msg'>";
			
			if (isset($message_display)) {
				echo $message_display;
			}
			echo "</div>";
			echo "</div>";

			echo "<div class='user-box'>";
			$data = array(
			'type' => 'email',
			'name' => 'email_value'
			);
			echo form_input($data);
			echo form_label('E-mail');
			echo "</div>";
			
			echo "<div class='user-box'>";
			echo form_password('password');
			echo form_label('Password : ');
			echo "</div>";
			
			echo "<div class='dugme-box'>";
			echo "<input type='submit' class='dugme' value=' Sign up ' name='submit'/><br />";
			echo "</div>";
			?>
			<a href="<?php echo base_url() ?>index.php/user_authentication/login">Already have and account?</a>
			<?php echo form_close(); ?> 
		</div>
	</div>
</div>
