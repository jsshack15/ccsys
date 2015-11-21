<?php
session_start();

$login=NULL;
$_SESSION['login']=$login;


?><!DOCTYPE html>
<html lang="en">
	<?php include("title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("header.php"); ?>
			
			<div class="row bg-success thank">
				<div class="col-xs-12 thankmid">
				
					<div class="col-xs-12 text-center thankyou">
						<h1><a href="/ccs/login/">Please Sign In Again to continue</a></h1> 
					</div>
				</div>
			</div>			
			

			<?php include("footer.php"); ?>
		
		</div>
	</body>
</html>