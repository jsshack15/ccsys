<?php
$email=$_REQUEST['email'];
$fonno=$_REQUEST['fonno'];

if($_REQUEST['contact'])
{
	
	if($email==NULL or $fonno==NULL)
	{
		$msg="Please fill all details";
	}
	else
	{
	include("../database.php");
	
	$q="insert into contact values('','$email','$fonno')";
	mysql_query($q);
	
	$msg="Query recieved";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
	<?php include("../title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("../header.php"); ?>
			
			<div class="row jumbotron" style="
    margin-bottom: 0px;
    margin-top: 42px;
    padding: 65px;
">
			<h1 style="
    margin-bottom: 45px;
"> Contact Us </h1>
				<form role="form">
					<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
					<label for="fonno">Phone No:</label>
					<input type="text" class="form-control" id="fonno" name="fonno">
					</div>
					<span class="err"><?php echo $msg; ?></span><br>
					<input type="submit" name="contact" value="Contact Us" />
				</form>
			
			</div>

			<?php include("../footer.php"); ?>
		
		</div>
	</body>
</html>