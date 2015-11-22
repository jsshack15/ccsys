<?php
session_start();
$email=$_SESSION['email'];


$name=$_REQUEST['name'];
$cn=$_REQUEST['cn'];
$branch=$_REQUEST['branch'];
$fonno=$_REQUEST['fonno'];
$role=$_REQUEST['role'];




if($_REQUEST['submit'])
{
	if($name==NULL or $cn==NULL or $branch==NULL or $fonno==NULL)
	{
		$err="Please fill all the information";
		
	}
	else
	{
		include("database.php");
		$q="insert into profile values('','$name','$cn','$branch','$fonno','$role','$email')";
		mysql_query($q);
		
		
		$fname=$_FILES['upload_image'];
		
		move_uploaded_file("$fname[tmp_name]","image/$fname[name]");
	
		$q1="insert into pic values('','$fname[name]')";
		mysql_query($q1);
		
		header("Location: /ccs/thankyou.php");
	}
}





?><!DOCTYPE html>
<html lang="en">
	<?php include("title.php"); ?>
	<body>
		<div class="container-fluid">
		
			<?php include("header.php"); ?>
			
			<div class="row">
				<div class="col-xs-12 welcomepage">
				
					<h1 class="text-center "> Profile Details </h1>
					<form role="form" method="post" enctype="multipart/form-data">
						<div class="form-group">
						<label for="name">Your Name:</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
						</div>
						
						<div class="form-group">
						<label for="cn">College Name:</label>
						<input type="text" class="form-control" id="cn" name="cn" placeholder="College Name">
						</div>
						
						<div class="form-group">
						<label for="branch">Branch:</label>
						<input type="text" class="form-control" id="branch" name="branch" placeholder="Branch">
						</div>
						<div class="form-group">
							<p id="add_photo">
								<label >
									<span>
									Photo For Your Profile:
									</span> 	
									<span>
										<input type="file" id="upload_image" name="upload_image" > <br>
								
									</span>	
								</label>
							</p>
						</div>
						
						<div class="form-group">
						<label for="fonno">Phone No:</label>
						<input type="text" class="form-control" id="fonno" name="fonno" placeholder="Phone No.">
						</div>
						
						<div class="form-group">
						<label for="role">Your Role:</label>
						<select class="form-control" id="role" name="role">
						<option selected="selected">-Choose From Drop Down-</option>
						<option>Student</option>
						<option>Faculty</option>
						</select>
						</div>
						<span class="err"><?php echo $err; ?></span><br>
						<input type="submit" name="submit" id="submit" />
					</form>
						
				</div>
			
			</div>	
	
	

			<?php include("footer.php"); ?>
		
		</div>
	</body>
</html>