<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'reportsystem');

if(isset($_POST['password'])){

    $password = $_POST['password'];
    $userId = $_POST['userId'];

    // echo $password; exit;

   
	$sql = "UPDATE users SET `PASSWORD`='$password' WHERE `id`=$userId";
	$query = mysqli_query($con,$sql);

		if($query ==1){

			
			echo "password updated";
			header('location:userdashboardpage.php');


		}
}


?>

