<!DOCTYPE html>
<html>
<head>
	<title>Froms</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

</head>
<body>
	<?php 

	$connection =mysqli_connect('localhost','root');
	mysqli_select_db($connection,'cart');
	if (isset($_POST['submit'])) {
	    $name= $_POST['name_input'];
		$phone_no=$_POST['phone_input'];
		$address= $_POST['address_input'];
		$gender= $_POST['gender_input'];
		$email= $_POST['email_input'];
		$password= $_POST['password_input'];


		if ($gender==1) {
			$gender_i= " Male";
		}
		else{
			$gender_i= "Female";
		}
		$sql="insert into register (name,phone_no,address,gender,email,password) VALUES('$name',$phone_no,'$address','$gender_i','$email','$password')";

		if (!mysqli_query($connection,$sql)) {
			echo "Something went wrong";
		}
		else
		{
			echo "Registration Successful ";
			
		}


	}
	
	 ?>


	<form method="post"  >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="NameInput"> Name</label>
						<input type="text" class="form-control" id="name_input" name="name_input">
						
					</div>

					
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="PhoneNoInput">Phone Number</label>
						<input type="text" class="form-control" id="phone_number" name="phone_input">
						
					</div>

					
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="AddressInput">Address</label>
						<input type="text" class="form-control" id="address_input" name="address_input">
						
					</div>

					
				</div>
				
			</div>


				<div class="row">
				<div class="col-lg-6">
					<label for="GenderInput">Gender</label>
					<select class="custom-select" name="gender_input">
						<option selected>Gender</option>
						<option value="1">Male</option>
						<option value="2">Female</option>

					</select>
				</div>
			</div>


			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="EmailInput">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email
						" name="email_input">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>


				</div>

			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="PasswordInput">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_input">
					</div>

				</div>

			</div>


		
			


			<button type="submit" name="submit" class="btn btn-primary">Submit</button>

		</div>


	</form>
	







<link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.js">
<link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.js">

</body>
</html>