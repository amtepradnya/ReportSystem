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
	$email = $_POST['email'];
    $password = $_POST['password'];


     if($email == "admin@gmail.com"){
        echo "login successful";
			// $_SESSION['user'] = $username;
			header('location:dashboardpage.php');

     }else{ 
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
   
	$query = mysqli_query($con,$sql);

	 $row = mysqli_num_rows($query);
     $userresult = $query->fetch_assoc();
      $userId=$userresult['id'];
   
$sqlnew = "SELECT * FROM loginlogs WHERE userId= $userId";
$querynew = mysqli_query($con,$sqlnew);

 $rownew = mysqli_num_rows($querynew);
 $logresult = $querynew->fetch_assoc();

//  echo "<pre>"; print_r($rownew);
//    exit;

    if($row == 1  ){
         if($rownew == 1)
         {
            echo "login successful";
            $_SESSION['user'] = $userresult;
            header('location:updatePassword.php');

         }else{
            echo "login successful";
            $_SESSION['user'] = $userresult;
            header('location:userdashboardpage.php');

         }
          
       
        
    }else{


        echo "login failed";
			// header('location:adminmainpage.php');

    }


     }

}


?>

