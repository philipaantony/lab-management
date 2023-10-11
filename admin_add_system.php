<html>

<head>
<?php
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
            <input type="text"  class="user-input" placeholder="System No" name="sname"  required="" pattern="[0-9]+">
            </div>

            <div>
            <input type="text" class="user-input" placeholder="Operating system" name="os" required="" >
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
    echo "<script>alert('Registration..................')</script>";
	// echo "hello";
    $name=$_REQUEST["sname"];
    $address=$_REQUEST["os"];
    
   
	
	$a="insert into system(system,os) values('$name','$address')";
    mysqli_query($conn,$a);
	// echo $a;

	echo "<script>alert(' Completed Successfully')</script>";
}
include("footer.html")

?>