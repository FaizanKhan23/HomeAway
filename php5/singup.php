<?php include "connection.php" ?>
<?php
if(isset($_POST["submit"]))

{
$username=$_POST["username"];
$pass=$_POST["pass"];

$query="SELECT * FROM signup WHERE username='$username'";
$result=mysqli_query($conn,$query);

$num=mysqli_num_rows($result);

if($num==0)
{

$query="INSERT INTO signup (username,password)VALUES('$username','$pass')";

$result=mysqli_query($conn,$query);

header("Location:http://localhost/php3/login.php");
}

else
{

echo"Username Already Exist";

}
}

?>
<!doctype html>
</html>
<head>
<title>SIgNUP PAGE</title>
</head>
<body>

<h1>Signup Form</h1>


<form name="frm" action="" method="post">
<p>USERNAME<input type="text" name="username" ></p>
<p>PASSWORD<input type="password" name="pass" ></p>
<p><a href="login.php"><input type="submit" name="submit" value="send"></a></p>
</form>
