<?php
	if(isset($before_login) ){
?>

<header>
	<nav>
		<div class="nav-wrapper teal lighten-2">
			<a href="#!" class="brand-logo"> <img src="view/img/logo.png" alt="" width="70px" height="70px"> </a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"> <i class="large material-icons">menu</i> </i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="index.php?page=index"> <i class="fas fa-home"></i> Home</a></li>
				<li><a href="index.php?page=register"> <i class="fas fa-user-plus"></i> Register</a></li>
				<li><a href="index.php?page=login"> <i class="fas fa-sign-in-alt"></i> Login</a></li>
				<li><a href="index.php?page=forgot_password"> <i class="fas fa-unlock"></i> Forgot Password</a></li>
			</ul>
		</div>
	</nav>

	<ul class="sidenav teal lighten-4" id="mobile-demo">
		<li><a href="index.php?page=index"> <i class="fas fa-home"></i> Home</a></li>
		<li><a href="index.php?page=register"> <i class="fas fa-user-plus"></i> Register</a></li>
		<li><a href="index.php?page=login"> <i class="fas fa-sign-in-alt"></i> Login</a></li>
		<li><a href="index.php?page=forgot_password"> <i class="fas fa-unlock"></i> Forgot Password</a></li>
	</ul>
</header>

<?php
	}
	else if($after_login)
	{
?>

<header>
	<nav>
		<div class="nav-wrapper teal lighten-2">
			<a href="#!" class="brand-logo"> <img src="view/img/logo.png" alt="" width="70px" height="70px"></a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"> <i class="large material-icons">menu</i> </i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="index.php?page=home"> <i class="fas fa-home"></i> Home </a></li>
				<li><a href="index.php?page=profile"> <i class="fas fa-user"></i> Profile</a></li>
				<li><a href="index.php?page=book_add"> <i class="fas fa-plus"></i> Add Book</a></li>
				<li><a href="index.php?page=book_list"> <i class="fas fa-book"></i> List Book</a></li>
				<li><a href="index.php?page=logout"> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
			</ul>
		</div>
	</nav>

	<ul class="sidenav teal lighten-4" id="mobile-demo">
		<li><a href="index.php?page=home"> <i class="fas fa-home"></i> Home</a></li>
		<li><a href="index.php?page=profile"> <i class="fas fa-user"></i> Profile</a></li>
		<li><a href="index.php?page=book_add"> <i class="fas fa-plus"></i> Add Book</a></li>
		<li><a href="index.php?page=book_list"> <i class="fas fa-book"></i> List Book</a></li>
		<li><a href="index.php?page=logout"> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
	</ul>
</header>


<?php
	}
?>
