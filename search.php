<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
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
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	#mylabel{
		font-weight: bold;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Pune" label="&raquo; Area under PMC"></optgroup><option value="Ambegaon Bk" >Ambegaon Bk</option><option value="Aundh" >Aundh</option><option value="Baner" >Baner</option><option value="Bavdhan Khurd" >Bavdhan Khurd</option><option value="Bavdhan Bk" >Bavdhan Bk</option><option value="Balewadi" >Balewadi</option><option value="Shivajinagar" >Shivajinagar</option><option value="Bibvewadi" >Bibvewadi</option><option value="Bhugaon" >Bhugaon</option><option value="Bhukum" >Bhukum</option><option value="Dhankawdi" >Dhankawdi</option><option value="Dhanori" >Dhanori</option><option value="Dhayari" >Dhayari</option><option value="Erandwane" >Erandwane</option><option value="Fursungi" >Fursungi</option><option value="Hadapsar" >Hadapsar</option><option value="Karve Nagar" >Karve Nagar</option><option value="Katraj" >Katraj</option><option value="Khadki" >Khadki</option><option value="Kharadi" >Kharadi</option><option value="Kondhwa" >Kondhwa</option><option value="Koregaon Park" >Koregaon Park</option><option value="Kothrud" >Kothrud</option><option value="Lohagaon" >Lohagaon</option><option value="Markal" >Markal</option><option value="Mohammed wadi" >Mohammed wadi</option><option value="Mundhwa" >Mundhwa</option><option value="Nanded" >Nanded</option><option value="Parvati hill" >Parvati hill</option><option value="Pashan" >Pashan</option><option value="Shivane" >Shivane</option><option value="Undri" >Undri</option><option value="Vadgaon Bk" >Vadgaon Bk</option><option value="Vadgaon Khurd" >Vadgaon Khurd</option><option value="Wagholi" >Wagholi</option><option value="Wanwadi" >Wanwadi</option><option value="Warje" >Warje</option><option value="Yerwada" >Yerwada</option><optgroup title="Area under PCMC" label="&raquo; Area under PCMC"></optgroup><option value="Akurdi" >Akurdi</option><option value="Bhosari" >Bhosari</option><option value="Chakan" >Chakan</option><option value="Chikhli" >Chikhli</option><option value="Chinchwad" >Chinchwad</option><option value="Dapodi" >Dapodi</option><option value="Dehu Road" >Dehu Road</option><option value="Dighi" >Dighi</option><option value="Hinjawadi" >Hinjawadi</option><option value="Maan" >Maan</option><option value="Moshi" >Moshi</option><option value="Pimple Gurav" >Pimple Gurav</option><option value="Pimpri" >Pimpri</option><option value="Ravet" >Ravet</option><option value="Sangvi" >Sangvi</option><option value="Talewadi" >Talewadi</option><option value="Tathwade" >Tathwade</option><option value="Thergaon" >Thergaon</option><option value="Wakad" >Wakad</option><optgroup title="Area around Vadgaon" label="&raquo; Area around Vadgaon"></optgroup><option value="Ambi" >Ambi</option><option value="Parandwadi" >Parandwadi</option><option value="Somatne" >Somatne</option><option value="Talegaon" >Talegaon</option><option value="Urse" >Urse</option><option value="Vadgaon Maval" >Vadgaon Maval</option><option value="Varale" >Varale</option><optgroup title="Cantonment Areas" label="&raquo; Cantonment Areas"></optgroup><option value="Pune Cantonment" >Pune Cantonment</option><option value="Khadki" >Khadki</option><option value="Dehu Road" >Dehu Road</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->
	<?php	if((isset($_GET['city']) && !empty($_GET['city'])) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))){
		$city=$_GET['city'];
		$blood_group=$_GET['blood_group'];
		$sql="SELECT * FROM donor WHERE city='$city' OR blood_group='$blood_group'";
		$result=mysqli_query($connection,$sql);
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				if($row['donation_date']=='0'){
					echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					<span class="name">'.$row['name'].'</span>
					<span> <label id="mylabel">City: </label>'.$row['city'].'</span>
					<span> <label id="mylabel">Blood Group: </label>'.$row['blood_group'].'</span>
					<span> <label id="mylabel">Gender: </label>'.$row['gender'].'</span>
					<span> <label id="mylabel">Email: </label>'.$row['email'].'</span>
					<span> <label id="mylabel">Contact No: </label>'.$row['contact_no'].'</span>
					<a href="request.php" class="btn btn-default btn-lg">Request</a>

					</div>';
				}else{
					echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					<span class="name">'.$row['name'].'</span>
					<span> <label id="mylabel">City: </label>'.$row['city'].'</span>
					<span> <label id="mylabel">Blood Group: </label>'.$row['blood_group'].'</span>
					<span> <label id="mylabel">Gender: </label>'.$row['gender'].'</span>
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

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>

<script type="text/javascript">
	$(function(){
		$("#search").on('click',function(){
			var city=$("#city").val();
			var blood_group=$("#blood_group").val();
			$.ajax({
				type: 'GET',
				url: 'ajaxsearch.php',
				data: {city:city,blood_group,blood_group},
				success:function(data){
					if(!data.error){
						$("#data").html(data);
					}
				}
			});
		});
	});
	</script>
