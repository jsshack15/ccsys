<?php
session_start();
$login=$_SESSION['login'];


if($_REQUEST['logout'])
{
	$login=NULL;
	$_SESSION['login']=$login;
	header("Location: index.php");
}

include("database.php");

$q="select * from profile where Role='Student'";
$z=mysql_query($q);	

$q1="select * from registration where Email='$login'";
$z1=mysql_query($q1);
$x1=mysql_fetch_assoc($z1);




								
?>
<!DOCTYPE html>
<html lang="en">
	<?php include("title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("header.php"); ?>
			
			<div class="row jumbotron user">
				<div class="col-sm-8">
					<form>
						<input type="submit" class="btn btn-default" id="logout" name="logout" value="logout">
					</form>
				</div>
			
				<div class="col-sm-4">
					<h1> Welcome <?php echo $login; ?> </h1>
				</div>
			
			</div>	
			
			<div class="row">
			
				<div class="col-sm-2">
				
				</div>
				
				<div class="col-sm-10">
					<?php
						while($x=mysql_fetch_assoc($z))
						{
							if($x[Id]!=$x1[Id])
							{
								$n=$x[Id];
								$q2="select * from pic where Id=$n";
								$z2=mysql_query($q2);
								$x2=mysql_fetch_assoc($z2);
					?>
								<div class="col-sm-3">
									<img src="/ccs/image/<?php echo $x2[Name]; ?>" class="withs"  />
									<?php echo $x[Name]."<br>"."<a href='/ccs/user/$x[Email]'>".$x[Email]."</a>"; ?>
								</div>
							<?php	
								
							}
						}
					?>
				</div>
			
			</div>
			
			
			
			<?php include("footer.php"); ?>
		
		</div>
	</body>
</html>