<?php
session_start();
$login=$_SESSION['login'];

if($login==NULL)
{
$email=$_REQUEST['email'];
$cemail=$_REQUEST['cemail'];
$pwd=$_REQUEST['pwd'];
$cpwd=$_REQUEST['cpwd'];
$checkbox=$_REQUEST['checkbox'];

if($_REQUEST['submit'])
{
	if($email==NULL or $cemail==NULL or $pwd==NULL or $cpwd==NULL or $checkbox==NULL)
	{
		$err="Please Fill All The Information";
	}
	else
	{
		if($email==$cemail)
		{
			if($pwd==$cpwd)
			{
				include("../database.php");
				
				$a1="select * from registration where Email='$email'";
				$z1=mysql_query($a1);
				$x1=mysql_fetch_assoc($z1);
									
				if($email==$x1[Email])
				{
					$err="User Already Exists";
				}
				else
				{
				$q="insert into registration values('','$email','$pwd')";
				mysql_query($q);
				$_SESSION['email']=$email;	
				header("location: ../welcome.php");
				}
			}
			else
			{
				$err="Password do not match";
			}
		}
		else
		{
			$err="Email do not match";
		}
	}

}
}
else
{
	header("location: ../user.php");
}



?>
<!DOCTYPE html>
<html lang="en">
	<?php include("../title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("../header.php"); ?>
			
			<div class="row jumbotron cyc">
				<h1 class="text-center col-xs-12"> Sign Up </h1>
			
			<form role="form" method="post">
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
				</div>
				<div class="form-group">
				  <label for="cemail">Confirm Email:</label>
				  <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Confirm your email">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
				</div>
				<div class="form-group">
				  <label for="cpwd">Confirm Password:</label>
				  <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Confirm password">
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" id="checkbox" name="checkbox" value="yes">I Agree to the <a href="">Terms & Condition</a> of collegehub </label>
				</div>
				<span class="err"><?php echo $err; ?></span><br>
				<input type="submit" class="btn btn-default" id="submit" name="submit">
		  	</form>
			
			</div>	
			
			
			
			<?php include("../footer.php"); ?>
		
		</div>
	</body>
</html>