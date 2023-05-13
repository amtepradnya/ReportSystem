<?php
session_start();
if(isset($_SESSION['user'])){
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

<div class="container center-div shadow" style="margin-top:3vw;">
		<div class="heading text-center text-uppercase text-white mb-5"> user Dashboard </div>
		<a href="updatePassword.php" class="btn btn-danger text-right" style="margin-top:-2vw; margin-left:1vw;"> Update Password</a>

        <a href="logout.php" class="btn btn-danger text-right" style="margin-top:-3vw; margin-left:78vw;">  Logout</a>
        <h2 class="text-center">Create Task</h2>


			<div class="container row d-flex flex-row justify-content-center mb-3">
			<div class="admin-form shadow p-2 ">
					<form action="submitTask.php" method="POST"  onSubmit="if(!confirm('Task Created')){return false;}">
                    <div class="form-group">

                    <label for="startTask">Start Task:</label>
					<input id="datepicker"value="" name="startTask" width="276" required>

                    <!-- <input type="button" class="btn btn-success" name="startTask" > -->
                  </div>
					<div class="form-group">
                    <label for="description">Description:</label>

                    <textarea class="form-control is-invalid" id="validationTextarea"  value="" name="description" required></textarea>
						</div>
					
						

						<div class="form-group">
                        <label for="notes">Notes:</label>

                        <textarea class="form-control is-invalid" id="validationTextarea" value="" name="notes" required></textarea>
						</div>
                        <input type="hidden" name="userId" value="<?php echo $_SESSION['user']['id']; ?>" class="form-control"
						 autocomplete="off" placeholder="enter firstName">

						<div class="form-group">
                        <label for="stopTask">Stop Task:</label>
                        <!-- <button type="button" name="stopTask" class="btn btn-primary" value="" class="btn">Stop Task</button> -->
						<!-- <input type="button" name="stopTask" class="btn btn-primary" value="" > -->
						<input id="datepicker2"value="" name="stopTask" width="276" required>
      
            



						</div>
						<input type="submit" class="btn btn-success" name="submit" >
				</form>
			</div>
		</div>
		<!-- <a href="logout.php" class="btn btn-danger">  Logout</a> -->

</div>
		




<script type="text/javascript">
	 $('#datepicker').datetimepicker({
            uiLibrary: 'bootstrap4',
			 format: 'dd/mm/yyyy HH:MM ' ,
			 footer: true, modal: true

			 
        });
		
		$('#datepicker2').datetimepicker({
            uiLibrary: 'bootstrap4',
			format: 'dd/mm/yyyy HH:MM ' ,
			 footer: true, modal: true
        });
// 		$("#submitForm").click(function() {
//    alert("Task Created");
// });
</script>
</body>

</html>

