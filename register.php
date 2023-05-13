<?php

session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'reportsystem');

if(isset($_POST['submit'])){

    

    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phoneNumber'];
   
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    $password= implode($pass); 

//    echo $password;
//    print_r($_POST); exit;
   
	$sql = "INSERT INTO users (firstName, lastName, email,phoneNumber,user_type, password) 
    VALUES('$firstName', '$lastName', '$email', '$phoneNumber','2','$password')";

	$query = mysqli_query($con,$sql);

	$last_id = $con->insert_id;

	$sqlNew = "INSERT INTO loginlogs (userId) VALUES('$last_id')";
	$querynew = mysqli_query($con,$sqlNew);
	$rownew = mysqli_num_rows($querynew);
	
	$rownew = mysqli_num_rows($query);
		if($row == 1 && $rownew == 1){

			
			// echo "user created";
			$_SESSION['user'] = $username;
			header('location:createUser.php');


		}else{
			echo " failed to create user";
			header('location:createUser.php');
		}

}


?>

