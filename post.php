<?php include 'server.php';?>
<?php
//initialize variable
$company = "";
$position ="";
$qualification = "";
$interview_from = "";
$interview_to = "";
$info ="";
$id=0;

//If submit button is clicked
if (isset($_POST['post'])) {
	$company = $_POST['company'];	
	$position = $_POST['position'];
	$qualification = $_POST['qualification'];
	$interview_from = $_POST['interview_from'];
	$interview_to = $_POST['interview_to'];
	$info =$_POST['info'];
	$myfile =$_POST['myfile'];
	$id =0;

$query ="INSERT INTO notification (company,position,qualification,interview_from,interview_to,info,myfile)VALUES ('$company','$position','$qualification','$interview_from','$interview_from','$info','$myfile')";
   	
   	if(mysqli_query($db, $query)) {
      echo 'post ';
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
   	header('location:index.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Post a job</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="post.css">

		<body>
			<div class="main">
				<h1>POST JOB NOTIFICATION</h1>
				<form method="post" action="post.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $id;?>">
					
					<div class="input">
						<label>Company name</label>
						<input type="text" name="company">
					</div>

					<div class="input">
						<label>Position</label>
						<input type="text" name="position">	
					</div>

					<div class="input">
						<label>Qualification</label>
						<input type="text" name="qualification">	
					</div>

					<div class="input">
						<label>Interview From</label>
						<input type="text" name="interview_from">	
					</div>

					<div class="input">
						<label>Interview To</label>
						<input type="text" name="interview_to">	
					</div>

					<div class="input">
						<label>More Information</label>
					<h5><input type="textarea" name="info"></h5>
					</div>
					<div class="input">
						<label>image</label>
					<input type="file" name="myfile" placeholder="fileto upload">
					</div>
					<div>
						<button type="submit" name="post" class="btn">Post</button>
					</div>

				</form>
			</div>
	</body>
</html>
