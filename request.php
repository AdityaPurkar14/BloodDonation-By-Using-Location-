<?php
// include header file
include ('include/header.php');

if(isset($_POST['submit'])){
    if(isset($_POST['term']) === true){
        if(isset($_POST['name']) && !empty($_POST['name'])){
            if(preg_match('/^[A-Za-z\s]+$/', $_POST['name'])){
                $name = $_POST['name'];
            } else {
                $nameError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <strong>Only Lower and upper case characters are allowed.</strong>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                     </div>';
            }
            } else {
                $nameError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Please fill the name field.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              		<span aria-hidden="true">&times;</span>
           			</button>
           			</div>';
        }
        if(isset($_POST['d_name']) && !empty($_POST['d_name'])){
            if(preg_match('/^[A-Za-z\s]+$/', $_POST['d_name'])){
                $d_name = $_POST['d_name'];
            } else {
                $nameError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <strong>Only Lower and upper case characters are allowed.</strong>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                     </div>';
            }
            } else {
                $nameError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Please fill the name field.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              		<span aria-hidden="true">&times;</span>
           			</button>
           			</div>';
        }

		if(isset($_POST['gender']) && !empty($_POST['gender'])){
			$gender=$_POST['gender'];

			}else{
				$genderError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please select your gender.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';

		}


		if(isset($_POST['day']) && !empty($_POST['day'])){
			$day=$_POST['day'];

			}else{
				$dayError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please select day input.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';

		}

		if(isset($_POST['month']) && !empty($_POST['month'])){
			$month=$_POST['month'];

			}else{
				$monthError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please select month input.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 	 		<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';

		}


		if(isset($_POST['year']) && !empty($_POST['year'])){
			$year=$_POST['year'];

			}else{
				$yearError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please select year input.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';

		}

		if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
            $blood_group = $_POST['blood_group'];
        	} else {
            	$blood_groupError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            		<strong>Please select Blood Group.</strong>
            		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
            		</button>
           			</div>';
        }


		if(isset($_POST['city']) && !empty($_POST['city'])){
			if(preg_match('/^[A-Za-z\s]+$/',$_POST['city'])){
              $city =$_POST['city'];
			}else{
				$cityError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Only Lower and upper case characters are allow.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	 				</div>';

			}

			}else{
				$cityError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please fill the city field.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';

		}
		if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
			if(preg_match('/^[7-9]\d{9}$/', $_POST['contact_no'])){
				$contact_no = $_POST['contact_no'];
			} else {
				$contact_noError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Contact number should start with 7, 8, or 9 and consist of 10 digits.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
			}
		} else {
			$contact_noError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please fill in the contact number.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
		}

        if(isset($_POST['d_contact_no']) && !empty($_POST['d_contact_no'])){
			if(preg_match('/^[7-9]\d{9}$/', $_POST['d_contact_no'])){
				$d_contact_no = $_POST['d_contact_no'];
			} else {
				$contact_noError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Contact number should start with 7, 8, or 9 and consist of 10 digits.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
			}
		} else {
			$contact_noError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please fill in the contact number.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
		}
		


		if (
            isset($_POST['password']) && !empty($_POST['password']) &&
            isset($_POST['c_password']) && !empty($_POST['c_password'])
        ) {
            if (strlen($_POST['password']) >= 6) {
                if ($_POST['password'] == $_POST['c_password']) {
                    $password = $_POST['password'];
                	} else {
                    	$passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Passwords do not match.</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    	</div>';
                }
            } else {
                $passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Password should be at least 6 characters long.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
               	 	</div>';
            }
       	 } else {
            $passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fill both password fields.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
           	 	</div>';
        }
		if(isset($_POST['email']) && !empty($_POST['email'])){

			$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
			if(preg_match($pattern,$_POST['email'])){
				$check_email =$_POST['email'];
			$sql = "SELECT email FROM receiptent WHERE email='$check_email'";
			$result = mysqli_query($connection,$sql);
			if(false){
	//mysqli_num_rows($result)>0
				// $emailError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				// 	<strong>Sorry this email is already exist.</strong>
				// 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  		// 	<span aria-hidden="true">&times;</span>
				// 	</button>
	  			// 	</div>';
			}else{
				$email =$_POST['email'];
                $d_email =$_POST['d_email'];

			}
	
			  
				}else{
					$emailError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please enter valid email address.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';
	
			}
	
				}else{
					$emailError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please fill the email field.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';
	
		}

        
       

		//Insert data in database

				if(isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email) && isset($d_email) && isset($contact_no) && isset($city) && isset($password)){
					
					$dob=$day."-".$month."-".$year;
					
					$password=md5($password);
					
                    $sql = "INSERT INTO receiptent (name,gender,email,city,contact_no,request_date,password,blood_group,d_name,d_contact,d_email) VALUES ('$name','$gender','$email','$city','$contact_no','$dob','$password','$blood_group','$d_name','$d_contact_no','$d_email')";

					if(mysqli_query($connection,$sql)){
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

				} else {
       				$termError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        			<strong>Please agree with our terms and conditions</strong>
        			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            		<span aria-hidden="true">&times;</span>
        			</button>
        			</div>';
    }

	
}
  

?>


<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
						<hr class="red-bar">
						<?php
							if(isset($termError)) echo $termError;
							if(isset($submitSuccess)) echo $submitSuccess;
							if(isset($submitError)) echo $submitError;
						?>
          <!-- Error Messages -->

				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php
							if(isset($name)) echo $name;
						?>">
						<?php
							if(isset($nameError)) echo $nameError;
						?>
					</div>
                    
                    <form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Donor Name</label>
						<input type="text" name="d_name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value=" "
							

					</div>
                    <!--full name-->

                    
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				<?php
				if(isset($blood_group)) echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>';
				?>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
			  <?php
							if(isset($blood_groupError)) echo $blood_groupError;
						?> </div><!--End form-group-->
			
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;" <?php if(isset($gender)) { if($gender=="Female") echo"checked";} ?>>
									  <?php
							if(isset($genderError)) echo $genderError;
						?>  </div><!--gender-->
					
                    <div class="form-inline">
    <label for="name">Request Date</label><br>
    <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
        <option value="">---Date---</option>
        <?php
        // Generate options for day
        for ($day = 1; $day <= 31; $day++) {
            printf('<option value="%02d">%02d</option>', $day, $day);
        }
        ?>
    </select>
    <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
        <option value="">---Month---</option>
        <?php
        // Array of months
        $months = [
            1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
            5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
            9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
        ];

        // Generate options for month
        foreach ($months as $monthNumber => $monthName) {
            printf('<option value="%02d">%s</option>', $monthNumber, $monthName);
        }
        ?>
    </select>
    <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
        <option value="">---Year---</option>
        <?php
        // Get the current year
        $currentYear = date('Y');

        // Generate options for year (from current year to 100 years back)
        for ($year = $currentYear; $year >= $currentYear - 100; $year--) {
            printf('<option value="%d">%d</option>', $year, $year);
        }
        ?>
    </select>
</div>

			   </div><!--End form-group-->
			   <?php
							if(isset($dayError)) echo $dayError;
						?>
						<?php
							if(isset($monthError)) echo $monthError;
						?>
						<?php
							if(isset($yearError)) echo $yearError;
						?>
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php
							if(isset($email)) echo $email;
						?>">
						<?php
							if(isset($emailError)) echo $emailError;
						?></div>
					 <div class="form-group">
						<label for="fullname">Donor Email</label>
						<input type="email" name="d_email" id="d_email" placeholder="Email" required  class="form-control" 
                       
                        </div>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" placeholder="+91**********" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10" value=" "
			</div>
                        
                        <div class="form-group">
              <label for="d_contact_no">Donor Contact No</label>
              <input type="text" name="d_contact_no" placeholder="+91**********" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10" value=""
						 </div><!--End form-group-->
			
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><?php
				if(isset($city)) echo '<option selected="" value="'.$city.'">'.$city.'</option>';
				?><optgroup title="Pune" label="&raquo; Area under PMC"></optgroup><option value="Ambegaon Bk" >Ambegaon Bk</option><option value="Aundh" >Aundh</option><option value="Baner" >Baner</option><option value="Bavdhan Khurd" >Bavdhan Khurd</option><option value="Bavdhan Bk" >Bavdhan Bk</option><option value="Balewadi" >Balewadi</option><option value="Shivajinagar" >Shivajinagar</option><option value="Bibvewadi" >Bibvewadi</option><option value="Bhugaon" >Bhugaon</option><option value="Bhukum" >Bhukum</option><option value="Dhankawdi" >Dhankawdi</option><option value="Dhanori" >Dhanori</option><option value="Dhayari" >Dhayari</option><option value="Erandwane" >Erandwane</option><option value="Fursungi" >Fursungi</option><option value="Hadapsar" >Hadapsar</option><option value="Karve Nagar" >Karve Nagar</option><option value="Katraj" >Katraj</option><option value="Khadki" >Khadki</option><option value="Kharadi" >Kharadi</option><option value="Kondhwa" >Kondhwa</option><option value="Koregaon Park" >Koregaon Park</option><option value="Kothrud" >Kothrud</option><option value="Lohagaon" >Lohagaon</option><option value="Markal" >Markal</option><option value="Mohammed wadi" >Mohammed wadi</option><option value="Mundhwa" >Mundhwa</option><option value="Nanded" >Nanded</option><option value="Parvati hill" >Parvati hill</option><option value="Pashan" >Pashan</option><option value="Shivane" >Shivane</option><option value="Undri" >Undri</option><option value="Vadgaon Bk" >Vadgaon Bk</option><option value="Vadgaon Khurd" >Vadgaon Khurd</option><option value="Wagholi" >Wagholi</option><option value="Wanwadi" >Wanwadi</option><option value="Warje" >Warje</option><option value="Yerwada" >Yerwada</option><optgroup title="Area under PCMC" label="&raquo; Area under PCMC"></optgroup><option value="Akurdi" >Akurdi</option><option value="Bhosari" >Bhosari</option><option value="Chakan" >Chakan</option><option value="Chikhli" >Chikhli</option><option value="Chinchwad" >Chinchwad</option><option value="Dapodi" >Dapodi</option><option value="Dehu Road" >Dehu Road</option><option value="Dighi" >Dighi</option><option value="Hinjawadi" >Hinjawadi</option><option value="Maan" >Maan</option><option value="Moshi" >Moshi</option><option value="Pimple Gurav" >Pimple Gurav</option><option value="Pimpri" >Pimpri</option><option value="Ravet" >Ravet</option><option value="Sangvi" >Sangvi</option><option value="Talewadi" >Talewadi</option><option value="Tathwade" >Tathwade</option><option value="Thergaon" >Thergaon</option><option value="Wakad" >Wakad</option><optgroup title="Area around Vadgaon" label="&raquo; Area around Vadgaon"></optgroup><option value="Ambi" >Ambi</option><option value="Parandwadi" >Parandwadi</option><option value="Somatne" >Somatne</option><option value="Talegaon" >Talegaon</option><option value="Urse" >Urse</option><option value="Vadgaon Maval" >Vadgaon Maval</option><option value="Varale" >Varale</option><optgroup title="Cantonment Areas" label="&raquo; Cantonment Areas"></optgroup><option value="Pune Cantonment" >Pune Cantonment</option><option value="Khadki" >Khadki</option><option value="Dehu Road" >Dehu Road</option></select>
	<?php
							if(isset($cityError)) echo $cityError;
						?></div><!--city end-->
			
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
			  <?php
							if(isset($passwordError)) echo $passwordError;
						?></div><!--End form-group-->
			
            <div class="form-inline">
              <input  type="checkbox"  checked="" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I  agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>