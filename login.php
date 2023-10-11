<html>
<head>
<?php
ob_start();
include("connection.php");
include("cheader.html");
include("cstyle.html");
?>
</head>
<body>
   <div id="main-header">
        <h1 id="reg-head">Login Now</h1>

        <form method="POST">
            <div>
                <input class="user-input" type="text" placeholder="Roll Number"class="user-input-button" name="username">
            </div>
            <div>
                <input class="user-input" type="password" placeholder="yyyy-mm-dd"class="user-input-button" name="password">
            </div>

            <div>
                <input class="user-input-button" type="submit" name="submit" value="Login" placeholder="Login Now">
            </div>
            <div>
               <a href="studentreg.php">Student Registration</a>
            </div>         
        </form>
    </div>
</body>

<?php
if(isset($_REQUEST["submit"]))
{
    echo "hekloo";
	$username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    echo "hekloo";
	$qry="select usertype,status from login where username='$username' and password='$password'";
	$res=mysqli_query($conn,$qry);
	$rs=mysqli_fetch_assoc($res);
	$da=$rs["usertype"];
	$das=$rs["status"];
    echo $da;
    echo $das;
	if($da=="admin")
	{
		header("location:adminhome.html");
		ob_end_flush();
	}
	elseif($da=="student")
	{
		session_start();
        $abc="SELECT * FROM student where rollno=$username";
        echo $abc;
		$re=mysqli_query($conn,$abc);
		if (mysqli_num_rows($re)>0)
			{
	  			while($data=mysqli_fetch_assoc($re))
					{
						$ccid = $data['sid'];
						echo$ccid;
						$_SESSION['sid']=$ccid;
						$_SESSION['rollno']=$username;
						echo $username;
					}
				}
		header("location:studenthome.html");
		ob_end_flush();
    }
	else
	{
	echo "<script>
	 alert(\"INVALID USERNAME OR PASSWORD \");
	 </script>";
	}
}
include("footer.html");
?>
