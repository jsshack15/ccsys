<?php
session_start();
$login=$_SESSION['login'];


?><!DOCTYPE html>
<html lang="en">
	<?php include("title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("header.php"); ?>
			
			<div class="row">
				<div class="col-xs-12 homepagepic" >
					<section class="demo">
						
							<div class="container123">
								<div style="display: inline-block;">
								<img src="1.jpg" class="img-responsive"/>
								</div>
								<div>
								<img src="2.jpg" class="img-responsive"/>
								</div>
								<div>
								<img src="3.jpg" class="img-responsive"/>
								</div>
								
							
							</div>
					</section>

				</div>
			
			</div>
			
			<div class="row cyc jumbotron">
				<h1 class="text-center col-xs-12"> Choose Your Profile </h1>
			
				<div class="col-sm-3 text-center well ugclk clk">
				
					
					<h1><span class=""><a href="student2student.php">Student To Student</a></span></h1>
				
				</div>
				
				<div class="col-sm-3 text-center well pgclk clk">
					<h1><span class=""><a href="student2faculty.php">Student To Faculty</a></span></h1>
			
				</div>
				
				<div class="col-sm-3 text-center well pgclk clk">
					<h1><span class=""><a href="faculty2faculty.php">Faculty To Faculty</a></span></h1>
					
			
				</div>
			
			
			</div>
			
			<?php include("footer.php"); ?>
		
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="/ccs/ys/js/sliderjs.js"></script>

	</body>
</html>