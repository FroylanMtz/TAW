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
	<h3>Please fill up the following form to add new book</h3>
	<form method="post">
		<fieldset class="light-blue lighten-5">
			<legend> <h5> Book Add Form </h5> </legend>
			<label for="title"> <h6> Title </h6> </label>
			<input type="text" name="title" id="title" placeholder="Title">
			<font color="red"><?php echo $errors["title"]; ?></font>
			<br>
			<label for="author"> <h6> Author </h6> </label>
			<input type="text" name="author" id="author" placeholder="Author">
			<font color="red"><?php echo $errors["author"]; ?></font>
			<br>
			<label for="description"> <h6> Description </h6> </label>
			<input type="text" name="description" id="description" placeholder="Description">
			<font color="red"><?php echo $errors["description"]; ?></font>
			<br>
			<input type="hidden" name="page" value="book_add">
			<input type="hidden" name="caller" value="self">
			<!--<input type="submit" value="Save">-->

			<button class="btn waves-effect waves-light" type="submit" name="action">Save
				<i class="material-icons right">save</i>
			</button>

		</fieldset>
	</form>
<?php
		}
		else
		{
?>
		<h3>Book Saved</h3>
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
