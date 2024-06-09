<?php	
include('include/config.php');
if((isset($_GET['city']) && !empty($_GET['city'])) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))){
		$city=$_GET['city'];
		$blood_group=$_GET['blood_group'];
		$sql="SELECT * FROM donor WHERE city='$city' OR blood_group='$blood_group'";
		$result=mysqli_query($connection,$sql);
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				if($row['donation_date']=='0'){
					echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					<span class="name">'.$row['name'].'</span>
					<span> <h1>City: </h1>'.$row['city'].'</span>
					<span> <h1>Blood Group: </h1>'.$row['blood_group'].'</span>
					<span> <h1>Gender: </h1>'.$row['gender'].'</span>
					<span> <h1>Email: </h1>'.$row['email'].'</span>
					<span> <h1>Contact No: </h1>'.$row['contact_no'].'</span>
					<a href="request.php" class="btn btn-default btn-lg">Request</a>

					</div>';
				}else{
					echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					<span class="name">'.$row['name'].'</span>
					<span> <h1>City: </h1>'.$row['city'].'</span>
					<span> <h1>Blood Group: </h1>'.$row['blood_group'].'</span>
					<span> <h1>Gender: </h1>'.$row['gender'].'</span>
					<h4 class="name text-center">Donated</h4>
					</div>';
				}
			}
		}else{
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Data not found</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  		<span aria-hidden="true">&times;</span>
					</button>
		  			</div>';

		}
	}
		?>