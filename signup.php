<?php include 'server.php';?>
<?php
//initialize variable
$username = "";
$password ="";
$id=0;

//If submit button is clicked
if (isset($_POST['submit'])) {
	$username = $_POST['username'];	
	$password = $_POST['password'];
	$id =0;

$query ="INSERT INTO details (username,password)VALUES ('$username','$password')";
   	if(mysqli_query($db, $query)) {
      echo 'Sign up  ';
   } else {
      echo 'error:'.$query.'   check: '.$db->error;
   }
   // check connection
   if ($db->connect_error){
      die("connection failed:" . $db->connect_error);
   }
   else {
      echo "successfully done.";
   }
}
	header('location:post.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="sign.css">


		<body>
		<div class="container">
			<div class="main">
				<form method="post" action="signup.php">
					<input type="hidden" name="id" value="<?php echo $id;?>">
					
					<div class="input">
						<label>UserName</label>
						<input type="text" name="username">
					</div>

					<div class="input">
						<label>Password</label>
						<input type="password" name="password">	
					</div>

					<div class="input">
						<button type="submit" name="submit" class="btn">LOGIN NOW</button>
					</div>
					<div class="input">
						<p>Dont have an account</p>
					</div>

				</form>
				
			</div>
		</div>
		</body>
</html>