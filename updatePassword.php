<?php
session_start();

if(isset($_SESSION['user'])){
     $userId=$_SESSION['user']['id'];
     $oldpassword=$_SESSION['user']['password'];

    //  echo $userId;
    //  echo $oldpassword;

    //  print_r($_SESSION['user']);
    
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
		<div class="heading text-center text-uppercase text-white mb-5"> update user password 
        </div>
		<a href="userdashboardpage.php" class="btn btn-danger text-right" style="margin-top:-2vw; margin-left:1vw;"> Dashboard</a>

        <a href="logout.php" class="btn btn-danger text-right" style="margin-top:-3vw; margin-left:78vw;">  Logout</a>


			<div class="container row d-flex flex-row justify-content-center mb-3">
			<div class="admin-form shadow p-2 ">
					<form action="updatePasswordData.php" method="POST"  onSubmit="if(!confirm('password updated')){return false;}">
                        
					<div class="form-group">
                    <label for="pwd">Password:</label>

							<input type="password" name="password" value="" class="form-control" autocomplete="off" placeholder="enter password">
						</div>
					
                        <input type="hidden" name="userId" value="<?php echo $_SESSION['user']['id']; ?>" class="form-control" autocomplete="off" placeholder="enter firstName">
                        <button type="submit" class="btn btn-success"  >Update</button>

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

