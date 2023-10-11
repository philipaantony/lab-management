<html>

<head>
<?php
// $stmid=$_REQUEST["id"];
include("connection.php");
include("aheader.html");
include("cstyle.html");

?>
</head>

<body>


    <div id="main-header">

        <h1 id="reg-head">Add Allocation</h1>

        <form method="POST">
            <div>
            <input type="text"  class="user-input" placeholder="student rollno" name="rollno" required="" pattern="[0-9]+">
            </div>
            <div>
            <input type="text"  class="user-input" placeholder="System No" name="sno" required="" pattern="[0-9]+">
            </div>
            <div>
                <input class="user-input-button" type="submit" value="Add Now" name="submit" placeholder="Add Now">
            </div>
           

           
        </form>

    </div>


</body>




<?php

if(isset($_REQUEST['submit']))
{
	// echo "hello";
    $name=$_REQUEST["rollno"];
    $name1=$_REQUEST["sno"];

    $date=date("Y/m/d");
    date_default_timezone_set("Asia/Kolkata");
    $asd=date('h:i:sa');
	
	$a="insert into allocation(stmid,sid,allocation_date,allocation_time,status) values('$name1','$name','$date','$asd','approved')";
    mysqli_query($conn,$a);
	echo $a;

	echo "<script>alert(' Completed Successfully')</script>";
}
include("footer.html")

?>