<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

<?php
		if($status=="before_submission" or $status=="failure")
		{
?>
	<h3>Please fill up the following form to update your profile</h3>
	<form method="post">
		<fieldset class="light-blue lighten-5">
			<legend> <h5> Profile Update Form </h5> </legend>
			<label for="name"> <h6> Name </h6> </label>
			<input type="text" name="name" id="name" value="<?php echo $profile[0]["name"]; ?>">
			<font color="red"><?php echo $errors["name"]; ?></font>
			<br>
			<label for="username"> <h6> Username </h6> </label>
			<input type="text" name="username" id="username" value="<?php echo $profile[0]["username"]; ?>" readonly="true">
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<label for="password"> <h6> Password </h6> </label>
			<input type="password" name="password" id="password">
			<font color="red"><?php echo $errors["password"]; ?></font>
			<br>
			[Fill up only if you want to change it]
			<br>
			<input type="hidden" name="page" value="profile">
			<input type="hidden" name="caller" value="self">
			<!--<input type="submit" value="Update">-->
			
			<button class="btn waves-effect waves-light" type="submit" name="action">Update
				<i class="material-icons right">refresh</i>
			</button>

		</fieldset>
	</form>
<?php
		}
		else
		{
?>
		<h3>Profile Updated</h3>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<h3>Invalid Login!!! Try Again.</h3>
<?php
	}
	include_once "footer.php";
?>
