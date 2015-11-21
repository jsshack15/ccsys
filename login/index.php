<?php
$email=$_REQUEST['email'];
$pwd=$_REQUEST['pwd'];

if($_REQUEST['submit'])
{
	if($email==NULL or $pwd==NULL)
	{
		$err="Please fill all the details";
	}
	else
	{
		include("../database.php");
		
		$a1="select * from registration where Email='$email'";
		$z1=mysql_query($a1);
		$x1=mysql_fetch_assoc($z1);
		
		if($email==$x1[Email])
		{
			if($pwd==$x1[Password])
			{
				header("location: ../user.php");
			}
			else
			{
				$err="Password do not match";
			}
		}
		else
		{
			$err="Email does not exist";
		}
	}

}

?>
<!DOCTYPE html>
<html lang="en">
	<?php include("../title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("../header.php"); ?>
			
			<div class="row jumbotron cyc">
				<h1 class="text-center col-xs-12"> Sign In </h1>
			
			<form role="form" method="post">
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
				</div>
				<span class="err"><?php echo $err; ?></span><br>
				<input type="submit" name="submit" id="submit" />
		  	</form>
			
			</div>	
			
			
			
			<?php include("../footer.php"); ?>
		
		</div>
	</body>
</html>