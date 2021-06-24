	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

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
		height: 100vh
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
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
		}

		10%, 30%, 50%, 70%, 90% {
			-webkit-transform: translate3d(-10px, 0, 0);
			transform: translate3d(-10px, 0, 0);
		}

		20%, 40%, 60%, 80% {
			-webkit-transform: translate3d(10px, 0, 0);
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
		height: 100vh
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
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
		}

		10%, 30%, 50%, 70%, 90% {
			-webkit-transform: translate3d(-10px, 0, 0);
			transform: translate3d(-10px, 0, 0);
		}

		20%, 40%, 60%, 80% {
			-webkit-transform: translate3d(10px, 0, 0);
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
		$gender=$_POST['gender_input'];
		$pass= $_POST['pass_input'];
		$sem= $_POST['sem_input'];
		$dept= $_POST['dept_input'];
		$adsem= $_POST['adsem_input'];



		if ($gender==1) {
			$gender_i= " Male";
		}
		else{
			$gender_i= "Female";
		}
		
		
		if ($sem==1) {
			$semi= "1st Year 1st semester";
		}
		else if($sem==2){
			$semi= "1st Year 2nd semester";
		}
		else if($sem==3){
			$semi= "2nd Year 1st semester";
		}
		else if($sem==4){
			$semi= "2nd Year 2nd semester";
		}
		else if($sem==5){
			$semi= "3rd Year 1st semester";
		}
		else if($sem==6){
			$semi= "3rd Year 2nd semester";
		}
		else if($sem==7){
			$semi= "4th Year 1st semester";
		}
		else if($sem==8){
			$semi= "4th Year 2nd semester";
		}

		
		if ($dept==1) {
			$depti= "COMPUTER SCIENCE AND ENGINEERING ";
		}
		else if($dept==2){
			$depti= "ELECTRICAL AND ELECTRONICS ENGINEERING";
		}
		else if($dept==3){
			$depti= "MECHANICAL ENGINEERING";
		}
		else if($dept==4){
			$depti= "CIVIL ENGINEERING";
		}
		else if($dept==5){
			$depti= "TEXTILE ENGINEERING";
		}
		
		if ($adsem==1) {
			$adsemi= "FALL 2019";
		}
		else if($adsem==2){
			$adsemi= "SPRING 2019";
		}
		else if($adsem==3){
			$adsemi= "FALL 2018";
		}
		else if($adsem==4){
			$adsemi= "SPRING 2018";
		}
		else if($adsem==5){
			$adsemi= "FALL 2017";
		}
		else if($adsem==6){
			$adsemi= "SPRING 2017";
		}
		else if($adsem==7){
			$adsemi= "FALL 2016";
		}
	    $sql="insert into users (firstname,lastname,username,gender,password,semester,department,admissionsem) 	VALUES('$fname','$lname','$uname','$gender_i','$pass','$semi','$depti','$adsemi')";
		if(mysqli_query($con,$sql)){
			echo "You have successfully logged in";
			exit();
		}else{
			echo"You have Entered Incorrect password";
			exit();
		}
	}


	?>
	<div class="user">
		<header class="user__header">

			<h1 class="user__title">A simple registration form</h1>
		</header>

		<form class="form"  method="post">
			<div class="form__group">
				<input type="text" name="fname_input" placeholder="FirstName"id="firstname_input" class="form__input" />
			</div>

			<div class="form__group">
				<input type="text" name="lname_input" placeholder="LastName" id="lastname_input"class="form__input" />
			</div>

			<div class="form__group">
				<input type="text" name="uname_input" placeholder="UserName"id="username_input" class="form__input" />
			</div>
			<div class="form__group">

				<select class="custom-select" name="gender_input">
					<option selected>Gender</option>
					<option value="1">Male</option>
					<option value="2">Female</option>

				</select>
			</div>
			<div class="form__group">
				<input type="password" name="pass_input" placeholder="Password"id="password_input" class="form__input" />
			</div>
			<div class="form__group">

				<select class="custom-select" name="sem_input">
					<option selected>Semester</option>
					<option value="1">1st Year 1st semester</option>
					<option value="2">1st Year 2nd semester</option>
					<option value="3">2nd Year 1st semester</option>
					<option value="4">2nd Year 2nd semester</option>
					<option value="5">3rd Year 1st semester</option>
					<option value="6">3rd Year 2nd semester</option>
					<option value="7">4th Year 1st semester</option>
					<option value="8">4th Year 2nd semester</option>
				</select>
			</div>

			<div class="form__group">

				<select class="custom-select" name="dept_input">
					<option selected>Department</option>
					<option value="1">COMPUTER SCIENCE AND ENGINEERING</option>
					<option value="2">ELECTRICAL AND ELECTRONICS ENGINEERING</option>
					<option value="3">MECHANICAL ENGINEERING</option>
					<option value="4">CIVIL ENGINEERING</option>
					<option value="5">TEXTILE ENGINEERING</option>
					
				</select>
			</div>
			<div class="form__group">

				<select class="custom-select" name="adsem_input">
					<option selected>AdmissionSemester</option>
					<option value="1">FALL 2019</option>
					<option value="2">SPRING 2019</option>
					<option value="3">FALL 2018</option>
					<option value="4">SPRING 2018</option>
					<option value="5">FALL 2017</option>
					<option value="5">SPRING 2017</option>
					<option value="6">FALL 2016</option>
					
				</select>
			</div>


			<button type="submit" name="submit" class="btn btn-primary">Submit</button>

		</form>
	</div>
</body>
</html>