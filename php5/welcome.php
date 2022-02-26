<?php include "connection.php" ?>
<?php session_start() ?>


<?php
$user = $_SESSION['title'];

if(isset($_POST['submit']))
{
$file_name=$_FILES['mypic']['name'];
$file_temp=$_FILES['mypic']['tmp_name'];

$target_loc="image/".basename($file_name);
move_uploaded_file($file_temp,$target_loc);

echo "success";

$query = "UPDATE signup SET image= '$file_name' WHERE  username  ='$user'";
$result = mysqli_query($conn,$query);

if($result)
{
	echo "updated";
}
else
{
	echo "update error";
}

$query2 = "SELECT *  FROM signup WHERE  username  ='$user'";
$result2 = mysqli_query($conn,$query2);
$row = mysqli_fetch_assoc($result2);
$_SESSION['imgs'] =$row['image'];
}


?>

<!doctype html>
<html>
<head>
<title> welcome page</title>
</head>
<body>

<?php echo "<h1>LOG IN SUCCESSFUL" . " " . $_SESSION['title'] . "</h1>"; ?>
<img src="image/<?php echo $_SESSION['imgs'];?>">



<h1> WELCOME PAGE</h1>


<form action="" method="POST" enctype="multipart/form-data">



<p>Attach: <input type="file" name="mypic"></p>

<p><input type="submit" name="submit"></p>

</form>

</body>
</html>
