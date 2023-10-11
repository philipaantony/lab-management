<html>

<head>
<?php
include("connection.php");
include("cheader.html");
include("cstyle.html");

?>
</head>

<body>


    <div id="main-header">

        <h1 id="reg-head">Register Now</h1>

        <form method="POST">
            <div>
            <input type="text"  class="user-input" placeholder="Student Name" name="name" required="" pattern="[a-z A-Z]+">
            </div>

            <div>
            <input type="text" class="user-input" placeholder="Roll Number " name="rollno" required="" pattern="[0-9]+">
            </div>

            <div>
                Date of Birth:
                <br>
            <input id="datepicker" placeholder="Birth Date" class="user-input" name="dob" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
            </div>

            <div>
            <select class="user-input" name="gender">
                <option selected>Gender</option>
                <option value="male">Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
            </div>
<div>
<input class="user-input" type="email" placeholder="E-mail" name="email" required="">
</div>

<div>
<input type="text" placeholder="Phone Number" name="phoneno" class="user-input" pattern="[0-9]{10}" required="">
</div>


<div>
<input type="text" name="course" class="user-input" placeholder="Department" title="Please enter your Course" required="">
</div>


<div>
<select class="user-input" name="batch">
<option value="">Select Year</option>
												<option value="First year">First Year</option>
												<option value="Second year">Second Year</option>
												<option value="Third year">Third Year </option>
												
            </select>
</div>
<div>


<input type="text" name="address" class="user-input" placeholder="Address" title="Please enter your Address" required="">
</div>


            <div>
                <input class="user-input-button" type="submit" value="Register Now" name="submit" placeholder="Login Now">
            </div>
            <div>
               <a href="login.php">Login Now</a>
            </div>

           
        </form>

    </div>


</body>




<?php

if(isset($_REQUEST['submit']))
{
    echo "<script>alert('Registration..')</script>";
	// echo "hello";
    $name=$_REQUEST["name"];
    $address=$_REQUEST["address"];
    $rollno=$_REQUEST["rollno"];
    $dob=$_REQUEST["dob"];    // echo $email;
	$gender=$_REQUEST["gender"];  // echo $phone;
    $email=$_REQUEST["email"];
    $phoneno=$_REQUEST["phoneno"];
    $course=$_REQUEST["course"];
    $batch=$_REQUEST["batch"];
	
	$a="insert into student(name,address,rollno,dob,gender,email,phoneno,course,batch) values('$name','$address','$rollno','$dob','$gender','$email','$phoneno', '$course','$batch')";
    mysqli_query($conn,$a);
	echo $a;

	$qry1 = "insert into login(username,password,usertype,status) values('$rollno','$dob','student','approved')";
	
	mysqli_query($conn,$qry1);
	echo "<script>alert('Registration Completed Successfully')</script>";
}
include("footer.html")

?>