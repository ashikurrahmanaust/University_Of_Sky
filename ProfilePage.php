<?php
    session_start();
?>

<?php 
    $host="localhost";
    $user="root";
    $password="";
    $db="registration";
    $con=mysqli_connect($host,$user,$password,$db);

    $t_email = $_SESSION["USEREMAIL"];
    $sql1 = "select * from users where email='".$t_email."'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = $result1->fetch_assoc();
    $firstname = $row1['firstname'];
    $lastname = $row1['lastname'];
    $fullName = $firstname." ".$lastname;
    $dept = $row1['department'];
    $t_name = $row1['username'];
    $t_firstName = $firstname;
    $t_lastName = $lastname;
   // $course1 = "C language";
   // $course2 = "Java";
    //$course3 = "Python";
    $t_year = $row1['year'];
    $t_semester = $row1['semester'];

    $userdept = $dept;
    $sql = "select * from courses where department='".$userdept."'";
    $result = mysqli_query($con,$sql);
    //print_r($result);
    $row = $result->fetch_assoc();
    $course1 = $row['coursename'];
    $row = $result->fetch_assoc();
    $course2 = $row['coursename'];
    $row = $result->fetch_assoc();
    $course3 = $row['coursename'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
	/*for desktop/laptops*/
@media only screen and (min-width: 768px) {
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: white;
            padding: 60px;
        }
        #entire{
            height: 600px;
            width: inherit;
            background-color: white;
            border: 1px solid rgb(210,210,210);
            box-shadow: -2px -2px 3px rgb(220,220,220), 2px 2px 3px rgb(220,220,220),-2px 2px 3px rgb(220,220,220),2px -2px 3px rgb(220,220,220);
            box-sizing: border-box;
            padding-top: 60px;
            padding-bottom: 60px;
            padding-left: 80px;
            padding-right: 80px;
        }
        #im{
            height: 50%;
            width: 40%;
            border: 1px solid darkblue;
            border-radius: 50%;
        }
        .lb{
            color: aqua;
            width: 500px;
        }
        .two{
            width: 47%;
            height: 100%;
            float: left;
            font-family: sans-serif;
            font-size: 18px;
            color: darkblue;
        }
        #sec1{
            padding: 30px;
            border-radius: 20px;
            border: 1px solid lightgray;
            background-color: rgb(245,245,245);
            text-align: center;
        }
        .sec2{
            padding: 20px;
            border-radius: 20px;
            border: 1px solid lightgray;
            background-color: rgb(245,245,245);
            width: 100%;
            height: 60%;
        }
        .sec3{
            padding: 20px;
            border-radius: 20px;
            border: 1px solid lightgray;
            background-color: rgb(245,245,245);
            width: 100%;
            height: 35%;
        }
        #sec1:hover{
            border: 1px solid rgb(220,220,220);
            background-color: white;
        }
        .sec2:hover{
            border: 1px solid rgb(220,220,220);
            background-color: white;
        }
        .sec3:hover{
            border: 1px solid rgb(220,220,220);
            background-color: white;
        }
}

/* for tabs and phones*/
@media only screen and (max-width: 768px) {
	        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: white;
            padding: 60px;
        }
        #entire{
            height: 600px;
            width: inherit;
            background-color: white;
            border: 1px solid rgb(210,210,210);
            box-shadow: -2px -2px 3px rgb(220,220,220), 2px 2px 3px rgb(220,220,220),-2px 2px 3px rgb(220,220,220),2px -2px 3px rgb(220,220,220);
            box-sizing: border-box;
            padding-top: 60px;
            padding-bottom: 60px;
            padding-left: 80px;
            padding-right: 80px;
        }
        #im{
            height: 50%;
            width: 40%;
            border: 1px solid darkblue;
            border-radius: 50%;
        }
        .lb{
            color: aqua;
            width: 500px;
        }
        .two{
            width: 47%;
            height: 100%;
            float: left;
            font-family: sans-serif;
            font-size: 18px;
            color: darkblue;
        }
        #sec1{
            padding: 30px;
            border-radius: 20px;
            border: 1px solid lightgray;
            background-color: rgb(245,245,245);
            text-align: center;
        }
        .sec2{
            padding: 20px;
            border-radius: 20px;
            border: 1px solid lightgray;
            background-color: rgb(245,245,245);
            width: 100%;
            height: 60%;
        }
        .sec3{
            padding: 20px;
            border-radius: 20px;
            border: 1px solid lightgray;
            background-color: rgb(245,245,245);
            width: 100%;
            height: 35%;
        }
        #sec1:hover{
            border: 1px solid rgb(220,220,220);
            background-color: white;
        }
        .sec2:hover{
            border: 1px solid rgb(220,220,220);
            background-color: white;
        }
        .sec3:hover{
            border: 1px solid rgb(220,220,220);
            background-color: white;
        }
}
        
    </style>
</head>
<body>
    <div id = "entire">
        <div class="two" id = "sec1" style = "float: left">
            <img id="im" src="propic.png">
            <h2 style="margin-bottom: 35px">My Profile</h2>
            <p><?php echo $fullName ?></p>
            <p>Department of <?php echo $dept ?></p>
        </div>
        <div class="two" style = "float: right;">
            <div class = "sec2">
                <h3>Personal Information</h3>
                <hr>
                <table>
                    <tr>
                        <td>Username</td>
                        <td>  <?php echo $t_name ?></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td>  <?php echo $t_firstName ?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>  <?php echo $t_lastName ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>  <?php echo $t_email ?></td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>  <?php echo $dept ?></td>
                    </tr>
                    <tr>
                        <td>Year</td>
                        <td>  <?php echo $t_year ?></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>  <?php echo $t_semester ?></td>
                    </tr>
                    
                </table>
            </div>
            
            <div style = "background: white; width: 100%; height: 5%"></div>
            
            <div class = "sec3">
                <div style="width: 70%; height: 100%; float: left; padding-left: 20px">
                    <h3 style="text-align: center">Your Courses</h3>
                    <ol type="1">
                        <li> <?php echo $course1 ?></li>
                        <li> <?php echo $course2 ?></li>
                        <li> <?php echo $course3 ?></li>
                    </ol>
                </div>
               
            </div>
        </div>
    </div>
</body>
    
    
</html>
    