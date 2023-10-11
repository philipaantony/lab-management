<html>

<head>
<?php
include("connection.php");
include("sheader.html");
include("cstyle.html");
session_start();

?>
</head>

<body>


    <div id="main-header">

        <h1 id="reg-head">Add Request</h1>

        <form method="POST">
           
            <div>
                <input class="user-input-button" type="submit" value="Add Now" name="submit" placeholder="Add Now">
            </div>
           
           
        </form>

    </div>


</body>




<?php

if(isset($_REQUEST['submit']))
{
    echo "<script>alert('Registration..................')</script>";
	// // echo "hello";
    // $name=$_REQUEST["sname"];
    // $address=$_REQUEST["os"];
    $rollno=$_SESSION['rollno'];
    $sid=$_SESSION['sid'];
   
	
    $date=date("Y/m/d");
	$a="insert into request(sid,rollno,allocate,rdate) values('$sid','$rollno','requested','$date')";
    mysqli_query($conn,$a);
	// echo $a;

	echo "<script>alert(' Completed Successfully')</script>";
}
include("footer.html")

?>