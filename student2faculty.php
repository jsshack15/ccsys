<?php
session_start();
$login=$_SESSION['login'];

include("database.php");
if($login==NULL)
{
header("location: login/");
}
else
{

	$q="select * from registration where Email='$login'";
	$z=mysql_query($q);
	$w=mysql_fetch_assoc($z);
	$n=$w[Id];
	
	$q1="select * from profile where Id=$n";
	$z1=mysql_query($q1);
	$w1=mysql_fetch_assoc($z1);
	
	if($w1[Role]=="Faculty")
	{
		header("Location: roleerror.php");
	}
	else
	{
		$_SESSION['login']=$login;
		header("location: s2f.php");
	}

}

?><!DOCTYPE html>
<html lang="en">
	<?php include("title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("header.php"); ?>
			
			<div class="row jumbotron">
			
			
			</div>	
			
			
			
			<?php include("footer.php"); ?>
		
		</div>
	</body>
</html>