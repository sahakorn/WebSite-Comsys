<?php
	require "config.php";
	$id_status = "";
	$pass_status = "";
	  if(isset($_POST['username'])){
		$username =  $_POST['username'];
		if ($username==null || !$username){
		$id_status = "Value is invalid.";
         header("location: login.php");
		}
		else{
			  if(isset($_POST['password']))
			  {$password = $_POST['password'];
				  if ($password==null || !$password){
					  $pass_status = " Password is Invalid.";
					header("location: login.php");
					}
					else{
						$sql = "SELECT * FROM comsystem.studentregis WHERE password='".$password."' AND Student_ID='".$username."'";
						$query =  mysql_query($sql) or die(mysql_error());
						$rows =  mysql_num_rows($query);
						if($rows==1)
						{	
							session_start();
							$_SESSION['login_user']=$username; // Initializing Session
							$status = "Success";
							header("location: student-page.php");// Redirecting To Other Page
							
							
						} 
						else
						{
							$sql2 = "SELECT * FROM comsystem.profressorregis WHERE password='".$password."' AND Projressor_ID='".$username."'";
							$query2 =  mysql_query($sql2) or die("รหัสอาจารย์ไม่ถูกต้อง");
							$rows2 =  mysql_num_rows($query2) or die(mysql_error());
							if($rows2==1)
								{	
									
									$status = "Success";
									header("location: index.php");// Redirecting To Other Page
								} 
								else{
									$status = "Error From database.";
									header("location: login.php");
									}
							
						}
					}
			  }
			 
			     
		}
		
	  }
	 
   

?>
