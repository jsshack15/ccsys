<?php
session_start();
$login=$_SESSION['login'];
if($login==NULL)
{
header("location: login/");
}
else
{
$_SESSION['login']=$login;
header("location: f2f.php");
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