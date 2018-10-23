<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<h3>Please fill up the following form to login to your account</h3>
	<form method="post">
		<fieldset class="light-blue lighten-5">
			<legend> <h5> Login Form </h5> </legend>
			<label for="username"> <h6> Username </h6> </label>
			<input type="text" name="username" id="username" placeholder="Username">
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<label for="password"> <h6> Password </h6> </label>
			<input type="password" name="password" id="password" placeholder="Password">
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<input type="hidden" name="page" value="login">
			<input type="hidden" name="caller" value="self">
			<!--<input type="submit" value="Sign In">-->

			<button class="btn waves-effect waves-light" type="submit" name="action">Sign In
				<i class="material-icons right">trending_flat</i>
			</button>

		</fieldset>
	</form>
<?php
	}
	else
	{
?>
		<form method="post">
			<input type="hidden" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<input type="hidden" name="password" id="password" value="<?php echo $_REQUEST["password"]; ?>">
			<input type="hidden" name="page" value="home">
		</form>
		<script>
			document.forms[0].submit();
		</script>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
