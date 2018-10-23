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
	<h3>Please fill up the following form to update book information</h3>
	<form method="post">
		<fieldset class="light-blue lighten-5">
			<legend> <h5> Book Update Form </h5> </legend>
			<label for="title"> <h6> Title </h6> </label>
			<input type="text" name="title" id="title" value="<?php echo $book[0]["title"]; ?>">
			<font color="red"><?php echo $errors["title"]; ?></font>
			<br>
			<label for="author"> <h6> Author </h6> </label>
			<input type="text" name="author" id="author" value="<?php echo $book[0]["author"]; ?>">
			<font color="red"><?php echo $errors["author"]; ?></font>
			<br>
			<label for="description"> <h6> Description </h6> </label>
			<input type="text" name="description" id="description" value="<?php echo $book[0]["description"]; ?>">
			<font color="red"><?php echo $errors["description"]; ?></font>
			<br>
			<input type="hidden" name="page" value="book_edit">
			<input type="hidden" name="caller" value="self">
			<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>">
			<!--<input type="submit" value="Update">-->

			<button class="btn waves-effect waves-light" type="submit" name="action">Update
				<i class="material-icons right">save</i>
			</button>

		</fieldset>
	</form>
<?php
		}
		else
		{
?>
		<h3>Book Updated</h3>
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
