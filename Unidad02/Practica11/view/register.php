<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<h4>Please fill up the following form to register yourself</h4>
	<form method="post">
		<fieldset class="light-blue lighten-5">
			<legend> <h5> Registration Form </h5> </legend>
			<label for="name"> <h6> Name </h6> </label>
			<input type="text" name="name" id="name" placeholder="Name">
			<br>
			<label for="username"> <h6> Username </h6> </label>
			<input type="text" name="username" id="username" placeholder="Username" >
			<br>
			<label for="password"> <h6> Password </h6> </label>
			<input type="password" name="password" id="password" placeholder="Password">
			<br>
			<input type="hidden" name="page" value="register">
			<input type="hidden" name="caller" value="self">

			<!--<input type="submit" value="Sign Up">-->
			<button class="btn waves-effect waves-light" type="submit" name="action">Sign Up
				<i class="material-icons right">send</i>
			</button>
			
		</fieldset>
	</form>
<?php
	}
	else
	{
?>
		<h3>Registration Successful</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
