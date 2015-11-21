<!DOCTYPE html>
<html lang="en">
	<?php include("title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("header.php"); ?>
			
			<div class="row cyc jumbotron">
				<h1 class="text-center col-xs-12"> Choose Your Profile </h1>
			
				<div class="col-sm-5 text-center well ugclk clk">
				
					
					<h1><span class="">Student To Student</span></h1>
					
					<!--<div class="ug">
						<ul>
							<li><a href="/ccs/ugarts.php">Arts</a></li>
							<li><a href="/ccs/ugcommerce.php">Commerce</a></li>
							<li><a href="/ccs/ugscience.php">Science</a></li>
						</ul>
					</div>-->
				</div>
				
				<div class="col-sm-5 text-center well pgclk clk">
					<h1><span class="pgs">PG</span></h1>
					
					<div class="pg">
						<ul>
							<li><a href="/ccs/pgarts.php">Arts</a></li>
							<li><a href="/ccs/pgcommerce.php">Commerce</a></li>
							<li><a href="/ccs/pgscience.php">Science</a></li>
						</ul>
					</div>
				</div>
			
			
			</div>
			
			<?php include("footer.php"); ?>
		
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	(function(){
		
	$('div.ug').hide();
	
	$('div.ugclk').hover(function(){
		$('div.ug').toggle();
		
	});
	
	$('div.pg').hide();
	
	$('div.pgclk').hover(function(){
		$('div.pg').toggle();
		
	});
	

	
	
	
	})();
</script>

	</body>
</html>