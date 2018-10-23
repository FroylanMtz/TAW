<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<h3>Please fill up the following form to retrieve password of your account</h3>
	<form method="post">
		
		<fieldset class="light-blue lighten-5">
			<legend> <h5> Forgot Password Form </h5> </legend>
			
			<label for="username"> <h6> Username </h6> </label>
			<input type="text" name="username" id="username" placeholder="username">
			<br>
			<input type="hidden" name="page" value="forgot_password">
			<input type="hidden" name="caller" value="self">
			<!--<input type="submit" value="Retrieve Password">-->

			<button class="btn waves-effect waves-light" type="submit" name="action">Retrieve Password
				<i class="material-icons right">loop</i>
			</button>
		</fieldset>
	</form>
<?php
	}
	else
	{
?>
		<h3>Please check your mail for new password</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
