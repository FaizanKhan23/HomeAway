<?php include"connection.php" ?>
<?php session_start() ?>
<?php 
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['pass'];


  $query="SELECT*FROM signup where username='$username' and password='$password'";
  $result=mysqli_query($conn,$query);
  $num=mysqli_num_rows($result);
  $row=mysqli_fetch_assoc($result);
  

  
  if($num==1)
  {

	     echo"Log in Successful";
		 
		 $_SESSION['title']=$row['username'];
		  $_SESSION['imgs']=$row['image'];
		 header("Location:http://localhost/php3/welcome.php");
       
  
  }
  
  else
  {
	  echo"Incorrect password";
  }
  
  

}

?>

<!doctype html>
<html>
<head>
<title>Log in</title>



</head>

<body>

<h1>Login Form</h1>

<form name="frm" method="post" action="" enctype="multipart/form-data">

<p><input type="text" placeholder="Name here" name="username"></p>

<p><input type="password" placeholder="Password here" name="pass"></p>

<p><input type="submit" value="Log in"  name="submit"></p>

</form>





</body>
</html>