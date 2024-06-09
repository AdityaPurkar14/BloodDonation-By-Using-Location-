
<?php 

	include 'include/header.php'; 
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		if(isset($_POST['date'])){
			$showForm='<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Do you really Donated the Blood?</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form target="" method="post">
			<br>
			<input type="hidden" name="userId" value="'.$_SESSION['user_id'].'">
			<button type="submit" name="updaterec" class="btn btn-danger">Yes</button>

			<button type="button" class="btn btn-info" data-dismiss="alert">
			<span aria-hidden="true">Oops! No </span>
			</button>      
		</form>
 </div>';
		}
		if(isset($_POST['userId'])){
			$userId=$_POST['userId'];
			$currdate=date_create();
			$currdate=date_format($currdate,'d-m-Y');
			$sql="UPDATE donor SET donation_date='$currdate' WHERE id='$userId'";
			if(mysqli_query($connection,$sql)){
				$_SESSION['donation_date']=$currdate;
				header("Location:index.php");

			}else{
				$submitError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Something went wrong.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';
			}
		}
	
	

?>


<style>
	h1,h3{
		display: inline-block;
		padding: 10px;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">
							<?php
									if(isset($submitError)) echo $submitError;

							?>
								<div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">
    						
    								<strong>Warning!</strong> Are you sure you want a save the life if you press yes, then you will not be able to show before 3 months.
    							
    							<div class="buttons" style="padding: 20px 10px;">
    								<input type="text" value="" hidden="true" name="today">
    								<button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
    								<button class="btn btn-info" id="no" name="no">No</button>
    							</div>
  							</div>
							<div class="heading text-center">
								<h3>Welcome </h3> <h1> <?php 
          							if(isset($_SESSION['name']))
           							 echo $_SESSION['name'];
         							 ?></h1>
							</div>
							<p class="text-center">Here you can manage your your profile</p>
							<div class="test-success text-center" id="data" style="margin-top: 20px;">
							<?php 
								if(isset($showForm)) 
								echo $showForm;
							?>
							<!-- Display Message here--></div>
							
							<?php
								$blood_donation_date=$_SESSION['donation_date'];
								
								if($blood_donation_date == '0'){
									echo 
									'<form target="" method="post">

							
									<button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
								</form>';
								}else{
									$start=date_create("$blood_donation_date");
									$end=date_create();
									$diff=date_diff($start,$end);

									$diffMonth=$diff->m;
									

									if($diffMonth >= 3){
										echo 
									'<form target="" method="post">

							
									<button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
								</form>';
									}else{
										echo 
									'<div class="donors_data">
									<span class="name">Congratulation!</span>
									<span>you already saved the life.you can donate the blood after 3 months.we are very thankful to you.</span>
							
									</div>';
									}
									
								}
							?>
							
							
							
							
							

						</div>
					</div>
				</div>
			</div>
		</div>
		
		
<?php
}else{
	header("Location: ../index.php");
}
include 'include/footer.php'; 
?>