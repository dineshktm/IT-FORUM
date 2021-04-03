<?php
session_start();
$a=$_POST['username'];
$b=$_POST['password']; 
if((strlen($a)>0)&&(strlen($b)>0)&&!isset($_SESSION['uname']))
	{	
			$conn=mysqli_connect("localhost","root","","companys");
		 if(!$conn)
		 	die("connection failed:".mysqli_connect_error());

		 else
		{
			$sql="SELECT username FROM login WHERE username='$a' AND password='$b'";
		    $result=mysqli_query($conn,$sql); 

			if(mysqli_num_rows($result)==1)
			{
				$_SESSION['login']=1;
				$row=mysqli_fetch_array($result);
				$_SESSION['uname']=$row['username'];
				$_SESSION['role']=$row['role'];
				header('Location:firstpage.php');
			}
			else
				echo 'user does not exist';
	    }
	}
else
	header('Location:index.php');
mysqli_close($conn);
?>