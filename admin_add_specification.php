<html>

<head>
<?php
$stmid=$_REQUEST["id"];
include("connection.php");
include("aheader.html");
include("cstyle.html");

?>
</head>

<body>


    <div id="main-header">

        <h1 id="reg-head">Add System Details</h1>

        <form method="POST">
            <div>
            <input type="text"  class="user-input" placeholder="System Specification" name="specification" required="">
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
    $name=$_REQUEST["specification"];
	
	$a="insert into specification(stmid,specification) values('$stmid','$name')";
    mysqli_query($conn,$a);
	// echo $a;

	echo "<script>alert(' Completed Successfully')</script>";
}
include("footer.html")

?>