	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 


<?php 
$host="localhost";
$user="root";
$password="";
$db="registration";
$con=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['submit'])) {
	$fname= $_POST['fname_input'];
	$lname=$_POST['lname_input'];
	$uname=$_POST['uname_input'];
	$email=$_POST['email_input'];
	$gender=$_POST['gender_input'];
	$pass= $_POST['pass_input'];
	$sem= $_POST['semester_input'];
	$dept= $_POST['dept_input'];
	$year= $_POST['year_input'];
	$pass = md5($pass);
	if ($gender==1) {
		$gender_i= " Male";
	}
	else{
		$gender_i= "Female";
	}
	$semi="";
	if ($sem==1) {
		$semi= "1st semester";
	}
	else if($sem==2){
		$semi= "2nd semester";
	}
	

	$depti = "";
	if ($dept==1) {
		$depti= "CSE";
	}
	else if($dept==2){
		$depti= "EEE";
	}
	else if($dept==3){
		$depti= "ME";
	}
	$adyear = "";
	if ($year==1) {
		$adyear= "1st Year";
	}
	else if($year==2){
		$adyear= "2nd Year";
	}
	else if($year == 3){
		$adyear= "3rd Year";
	}
	else if($year==4){
		$adyear= "4th Year";
	}
    $sql="insert into users (firstname,lastname,username,gender,email,password,department,year, semester) 	VALUES('$fname','$lname','$uname','$gender_i','$email','$pass','$depti','$adyear','$semi')";

	if(mysqli_query($con,$sql)){
		header("Location: login.php");
		exit();
	}else{
		?> <script> alert('The email is already taken.Please try another email'); window.location.href = 'regform.php';</script> 
<?php
		//echo"The email is already taken. Please try another email";
		exit();
	}
}


?>



<html>

<style>
/*for desktop/laptops*/
@media only screen and (min-width: 768px) {
	$font-family:   "Roboto";
	$font-size:     14px;

	$color-primary: #ABA194;

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	body {
		font-family: $font-family;
		font-size: $font-size;
		background-size: 200% 100% !important;
		animation: move 10s ease infinite;
		transform: translate3d(0, 0, 0);
		background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
		height: 100vh;
	}

	.user {
		width: 90%;
		max-width: 340px;
		margin: 10vh auto;
	}

	.user__header {
		text-align: center;
		opacity: 0;
		transform: translate3d(0, 500px, 0);
		animation: arrive 500ms ease-in-out 0.7s forwards;
	}

	.user__title {
		font-size: $font-size;
		margin-bottom: -10px;
		font-weight: 500;
		color: white;
	}

	.form {
		margin-top: 40px;
		border-radius: 6px;
		overflow: hidden;
		opacity: 0;
		transform: translate3d(0, 500px, 0);
		animation: arrive 500ms ease-in-out 0.9s forwards;
	}

	.form--no {
		animation: NO 1s ease-in-out;
		opacity: 1;
		transform: translate3d(0, 0, 0);
	}

	.form__input {
		display: block;
		width: 100%;
		padding: 20px;
		font-family: $font-family;
		-webkit-appearance: none;
		border: 0;
		outline: 0;
		transition: 0.3s;

		&:focus {
			background: darken(#fff, 3%);
		}
	}

	.btn {
		display: block;
		width: 100%;
		padding: 20px;
		font-family: $font-family;
		-webkit-appearance: none;
		outline: 0;
		border: 0;
		color: white;
		background: $color-primary;
		transition: 0.3s;

		&:hover {
			background: darken($color-primary, 5%);
		}
	}

	@keyframes NO {
		from, to {
		
			transform: translate3d(0, 0, 0);
		}

		10%, 30%, 50%, 70%, 90% {
		
			transform: translate3d(-10px, 0, 0);
		}

		20%, 40%, 60%, 80% {
		
			transform: translate3d(10px, 0, 0);
		}
	}

	@keyframes arrive {
		0% {
			opacity: 0;
			transform: translate3d(0, 50px, 0);
		}

		100% {
			opacity: 1;
			transform: translate3d(0, 0, 0);
		}
	}

	@keyframes move {
		0% {
			background-position: 0 0
		}

		50% {
			background-position: 100% 0
		}

		100% {
			background-position: 0 0
		}
	}
}

/* for tabs and phones*/
@media only screen and (max-width: 768px) {

	$font-family:   "Roboto";
	$font-size:     14px;

	$color-primary: #ABA194;

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	body {
		font-family: $font-family;
		font-size: $font-size;
		background-size: 200% 100% !important;
		animation: move 10s ease infinite;
		transform: translate3d(0, 0, 0);
		background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
		height: 100vh;
	}

	.user {
		width: 90%;
		max-width: 340px;
		margin: 10vh auto;
	}

	.user__header {
		text-align: center;
		opacity: 0;
		transform: translate3d(0, 500px, 0);
		animation: arrive 500ms ease-in-out 0.7s forwards;
	}

	.user__title {
		font-size: $font-size;
		margin-bottom: -10px;
		font-weight: 500;
		color: white;
	}

	.form {
		margin-top: 40px;
		border-radius: 6px;
		overflow: hidden;
		opacity: 0;
		transform: translate3d(0, 500px, 0);
		animation: arrive 500ms ease-in-out 0.9s forwards;
	}

	.form--no {
		animation: NO 1s ease-in-out;
		opacity: 1;
		transform: translate3d(0, 0, 0);
	}

	.form__input {
		display: block;
		width: 100%;
		padding: 20px;
		font-family: $font-family;
		-webkit-appearance: none;
		border: 0;
		outline: 0;
		transition: 0.3s;

		&:focus {
			background: darken(#fff, 3%);
		}
	}

	.btn {
		display: block;
		width: 100%;
		padding: 20px;
		font-family: $font-family;
		-webkit-appearance: none;
		outline: 0;
		border: 0;
		color: white;
		background: $color-primary;
		transition: 0.3s;

		&:hover {
			background: darken($color-primary, 5%);
		}
	}

	@keyframes NO {
		from, to {
			
			transform: translate3d(0, 0, 0);
		}

		10%, 30%, 50%, 70%, 90% {
		
			transform: translate3d(-10px, 0, 0);
		}

		20%, 40%, 60%, 80% {
		
			transform: translate3d(10px, 0, 0);
		}
	}

	@keyframes arrive {
		0% {
			opacity: 0;
			transform: translate3d(0, 50px, 0);
		}

		100% {
			opacity: 1;
			transform: translate3d(0, 0, 0);
		}
	}

	@keyframes move {
		0% {
			background-position: 0 0
		}

		50% {
			background-position: 100% 0
		}

		100% {
			background-position: 0 0
		}
	}
}
</style>
<body>
	<div class="user">
		<header class="user__header">
			<h1 class="user__title">Register Here</h1>
		</header>

		<form class="form"  method="post">
			<div class="form__group">
				<input type="text" name="fname_input" placeholder="FirstName"id="firstname_input" class="form__input"  required="" />
			</div>

			<div class="form__group">
				<input type="text" name="lname_input" placeholder="LastName" id="lastname_input"class="form__input" required="" />
			</div>

			<div class="form__group">
				<input type="text" name="uname_input" placeholder="UserName"id="username_input" class="form__input" required="" />
			</div>
			<div class="form__group">
				<input type="text" name="email_input" placeholder="Email"id="email_input" class="form__input" 
				type="email" required="" />
			</div>
			<div class="form__group">
				<input type="password" name="pass_input" placeholder="Password"id="password_input" class="form__input" required="" />
			</div>
			<div class="form__group">
				<select class="custom-select" name="gender_input">
					<option selected>Gender</option>
					<option value="1">Male</option>
					<option value="2">Female</option>

				</select>
			</div>
			<div class="form__group">
				<select class="custom-select" name="year_input">
					<option selected>Year</option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
				</select>
			</div>
			<div class="form__group">
				<select class="custom-select" name="semester_input">
					<option selected>Semester</option>
					<option value="1">1st Semester</option>
					<option value="2">2nd Semester</option>
				</select>
			</div>

			<div class="form__group">

				<select class="custom-select" name="dept_input">
					<option selected>Department</option>
					<option value="1">CSE</option>
					<option value="2">EEE</option>
					<option value="3">ME</option>
				</select>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>

		</form>
	</div>
</body>
</html>