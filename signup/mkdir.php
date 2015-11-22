<?php
mkdir("../user/$email");
$myfile = fopen("../user/$email/index.php", "w") or die("Unable to open file!");
$txt ="<?php
session_start();
$"."login=$"."_SESSION['login'];

$"."logout=$"."_REQUEST['logout'];
$"."usertextarea=$"."_REQUEST['usertextarea'];

if($"."_REQUEST['logout'])
{
	$"."login=NULL;
	$"."_SESSION['login']=$"."login;
	header('Location: ../../index.php');
}

include('../../database.php');

$"."q=\"select * from registration where Email='$"."login'\";
$"."z=mysql_query($"."q);								
$"."x=mysql_fetch_assoc($"."z);

$"."n=$"."x[Id];

$"."q1=\"select * from pic where Id=$"."n\";
$"."z1=mysql_query($"."q1);
$"."x1=mysql_fetch_assoc($"."z1);

if($"."_REQUEST['postuser'])
{
	$"."q4=\"insert into post values('','$"."login','$"."usertextarea')\";
	mysql_query($"."q4);	
}


?><!DOCTYPE html>
<html lang='en'>
	<?php include('../../title.php'); ?>
	<body>
		<div class='container-fluid'>
		
			<?php include('../../header.php'); ?>
			
			<div class='row jumbotron user'>
			
				<div class='col-sm-8'>
					<form>
						<input type='submit' class='btn btn-default' id='logout' name='logout' value='logout'>
					</form>
				</div>
			
				<div class='col-sm-4'>
					<h1> Welcome <?php echo $"."login; ?> </h1>
				</div>
				
			</div>
			
			<div class='row'>
				<div class='col-sm-2'>
					<img src='/ccs/image/<?php echo $"."x1[Name]; ?>' class='img-responsive img-thumbnail imguser'/>
				</div>
				
				<div class='form-group col-sm-10'>
					<form method='post'>
						<textarea class='form-control' rows='5' id='usertextarea' name='usertextarea'></textarea> <br>
						<input type='submit' name='postuser' value='post' class='btn'>
						
					</form>
				</div>
			</div>
			
			<div class='row'>
			
				<div class='col-sm-2'>
				
				</div>
				<div class='col-sm-10'>
					<?php 
						$"."q2=\"select * from post where Email='$"."login'\";
						$"."z2=mysql_query($"."q2);
						
						while($"."x2=mysql_fetch_assoc($"."z2))
						{
					?>
						<img src='/ccs/image/<?php echo $"."x1[Name]; ?>' class='img-responsive img-thumbnail imguser1'/>
						<span><?php echo $"."x2[Post]; ?></span> <br>
					<?php
						}
					?> 
				</div>
			
			</div>
		</div>
			
			
			
			
			<?php include('../../footer.php'); ?>
		
	
	</body>
</html>";
fputs($myfile,$txt);
fclose($myfile);
?>