<?php 
  session_start();
?>

<?php 
  $host="localhost";
  $user="root";
  $password="";
  $db="registration";
  
  $con=mysqli_connect($host,$user,$password,$db);
  if(isset($_POST['useremail'])){
    $uname = $_POST['useremail'];
    $_SESSION["USEREMAIL"] = $uname;
    $pass = $_POST['password'];
    $pass = md5($pass);
    $sql = "select * from users where email='".$uname."'";
    $result = mysqli_query($con,$sql);
    $row = $result->fetch_assoc();
    if ($pass == $row['password']){
      header("Location: profilePage.php");
      exit();
    }
    else {
	?> <script> alert('Please register first'); window.location.href = 'login.php';</script> 
<?php
     // echo "unsuccessfull\n";
	  //echo"please register first";
	  
      exit();
	
    }
  }
?>

<!DOCTYPE html>
<html>
	<head>
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

	
	
img {
    position: absolute;
    top: 0; bottom:0; left: 0; right:0;
    margin: auto;
}
h3{
font-size:20px;
align:center;
font-style:bold;
font-color:blue;
}
.wrapper {
    text-align: center;
}
label{
	font-color:blue;
	font-size:20px;
	font-style:bold;
	
	
}
}
/* for tabs and phones*/
@media only screen and (max-width: 768px){
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

	
	
img {
    position: absolute;
    top: 0; bottom:0; left: 0; right:0;
    margin: auto;
}
h3{
font-size:20px;
align:center;
font-style:bold;
font-color:blue;


}
.wrapper {
    text-align: center;
}
label{
	font-color:blue;
	font-size:20px;
	font-style:bold;
}



}
	
	</style>
	</head>
	<body>

  <div class="container">
<img src="images/login_1.gif" style="width:50%;height:50%;">
  <form method="post"align="center" class="form">
     <h3 align="center">Contact Form</h3>

     <div class="form_input"align="center">
      <label>Enter Email</label>
      <input type="text" name="useremail" placeholder="Enter Email" class="form-control" />
	  <p></p>
     </div>
   
     <div class="form_input"align="center">
      <label>Enter Password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter Password"  />
	  <p></p>
     </div>
	 <div>
	 <div class="wrapper">
<input type="submit" name="submit" value ="LOGIN" class="btn-login"/>
</div> 
</div>
</form>
</div>
</body>
</html>