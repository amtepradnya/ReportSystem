<?php
session_start();
echo "hii";

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'reportsystem');

// if(isset($_POST['submit'])){

    
    $userId = $_POST['userId'];

    $startTask = $_POST['startTask'];
    $description = $_POST['description'];
    $notes = $_POST['notes'];
    $stopTask = $_POST['stopTask'];

    // echo $password; exit;

   
    $sql = "INSERT INTO tasks (startTask,userId, notes,stopTask,description) 
    VALUES('$startTask','$userId', '$notes', '$stopTask','$description')";
	
    
    $query = mysqli_query($con,$sql);
    // $row = mysqli_num_rows($query);
        // print_r($query); exit;



		if($query ==1){

			
			header('location:userdashboardpage.php');


		}


?>

