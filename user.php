<?php
session_start();
$login=$_SESSION['login'];

$logout=$_REQUEST['logout'];

if($_REQUEST['logout'])
{
	$login=NULL;
	$_SESSION['login']=$login;
	header("Location: index.php");
}

include("database.php");

$q="select * from registration where Email='$login'";
$z=mysql_query($q);								
$x=mysql_fetch_assoc($z);

$n=$x[Id];

$q1="select * from pic where Id=$n";
$z1=mysql_query($q1);
$x1=mysql_fetch_assoc($z1);


?><!DOCTYPE html>
<html lang="en">
	<?php include("title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("header.php"); ?>
			
			<div class="row jumbotron user">
			
			<h1> Welcome <?php echo $login; ?> </h1>
			
			<form>
				<input type="submit" class="btn btn-default" id="logout" name="logout" value="logout">
			</form>
			
				
			
				
				<img src="image/<?php echo $x1[Name]; ?>" class="img-responsive img-thumbnail"/>
			</div>
			
			</div>
			
			
			
			<?php include("footer.php"); ?>
		
		</div>
	</body>
</html>