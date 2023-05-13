<?php
session_start();
if(!isset($_SESSION['user'])){
	//header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<div class="container center-div shadow">
		<div class="heading text-center text-uppercase text-white mb-5"> Admin Dashboard </div>
		<a href="dashboardpage.php" class="btn btn-danger text-right" style="margin-top:-2vw; margin-left:1vw;">Admin Dashboard</a>

		<a href="logout.php" class="btn btn-danger text-right" style="margin-top:-3vw; margin-left:78vw;">  Logout</a>

            <h2 class="text-center">CREATE USER</h2>
			<div class="container row d-flex flex-row justify-content-center mb-3">
			<div class="admin-form shadow p-2 ">
					<form action="register.php" method="POST" onSubmit="if(!confirm('User Created')){return false;}">
					<div class="form-group">

							<input type="text" name="firstName" value="" class="form-control"
							 autocomplete="off" placeholder="enter firstName" required>
						</div>
						<div class="form-group">

							<input type="text" name="lastName" value="" class="form-control"
							 autocomplete="off" placeholder="enter lastName" required>
						</div>
						<div class="form-group">

							<input type="email" name="email" value="" class="form-control" 
							autocomplete="off" placeholder="enter email" required>
						</div>

						<div class="form-group">

							<input type="text" name="phoneNumber" value="" class="form-control" 
							autocomplete="off" placeholder="enter phoneNumber" required>
						</div>

						<div class="form-group">
						<label for="password">Password:</label>

						<input type="checkbox" id="password" name="password" value="password" required>
						</div>
						<input type="submit" class="btn btn-success"  name="submit" >
				</form>
			</div>
		</div>

</div>
		


<script type="text/javascript">
$("#submitForm").click(function() {
   alert("User Register");
});
</script>


</body>

</html>

