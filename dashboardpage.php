<?php
session_start();
if(isset($_SESSION['user'])){
}
$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}
$db = mysqli_select_db($con, 'reportsystem');
$sql = "SELECT * FROM tasks";
   
$query = mysqli_query($con,$sql);


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
		<a href="createUser.php" class="btn btn-danger text-right" style="margin-top:-2vw; margin-left:1vw;">  Create User</a>

		<a href="logout.php" class="btn btn-danger text-right" style="margin-top:-3vw; margin-left:78vw;">  Logout</a>

		<h2 class="text-center">USER REPORT</h2>

			<div class="container row d-flex flex-row justify-content-center mb-5">
			<!-- <div class="admin-form shadow p-2 "> -->

			<table class="table">
  <thead>
    <tr>
	<th scope="col">Sr.No</th>
      <th scope="col">User Id</th>
      <th scope="col">Start Task</th>
      <th scope="col">Description</th>
      <th scope="col">Notes</th>
	  <th scope="col">Stop Time</th>
	  <th scope="col">Download Report</th>


    </tr>
  </thead>
  <tbody>
	
    <tr>
	
		<?php
		$counter = 0;

		while($row = $query->fetch_assoc())
        { 
	    ?>
		
	<th><?php echo ++$counter;?>	</th>
      <td><?php echo  $row['userId'];?></td>
	  <td><?php echo  $row['startTask'];?></td>
      <td><?php echo  $row['description'];?></td>
	  <td><?php echo  $row['notes'];?></td>
      <td><?php echo  $row['stopTask'];?></td>


	
		</tr>
		<?php 
		}
		?>
	
  
   
  </tbody>
</table>
				
			<!-- </div> -->
		</div>

</div>
		





</body>
</html>

