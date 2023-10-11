
<?php
include("connection.php");
include('aheader.html');
?>










<div class="contact py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-xl-5 mb-4 text-dark text-center">
				<span class="text-uppercase"></span><h1>View Students</h1></h3>
			<div class="row contact_wthreerow agileits-w3layouts pt-4">
				<div class="col-md-7 w3l_contact_form">
                    <br>
                    <br>
                    <br>
					<!-- <h4 class="font-italic mb-4">View Students</h4> -->
					<?php
					$sid = $_REQUEST['id'];
session_start();
$abc="SELECT * FROM student where sid=$sid";
// echo $abc;
					$re=mysqli_query($conn,$abc);
					
					if (mysqli_num_rows($re)>0)
					{
	  				while($data=mysqli_fetch_assoc($re))
					
					{
						$ccid = $data['sid'];
                        $fid = $data['name'];
						// echo $fid;
						// echo"***********************".$fid;
						$amount = $data['rollno'];
						$request=$data['dob'];
						
						
                        $sid=$data['gender'];
                     
                        $email=$data['email'];
                        $phno=$data['phoneno'];

                        $course=$data['course'];

                        $batch=$data['batch'];
                        $semid=$data['semid'];


					?>
					<form action="#" method="post">
                    <div class="form-group">
                        <label>Student Id:</label>
							<input type="text" name="t0" class="form-control" value="<?php echo "$ccid" ?>" required="" readonly >
						</div>

                        <label>Student Name:</label>
						<div class="form-group">
							<input type="text" name="t1" class="form-control" value="<?php echo "$fid" ?>" required="" >
						</div>

                        <label>Roll No:</label>
                        <div class="form-group">
							<input type="text" name="t2" class="form-control" value="<?php echo "$amount" ?>" required="" >
						</div>

                        <label>Date Of Birth:</label>
                        <div class="form-group">
							<input type="text" name="t3" class="form-control" value="<?php echo "$request" ?>" required="">
						</div>
                       
                        <label>Gender:</label>
                        <div class="form-group">
							<input type="text" name="t4" class="form-control" value="<?php echo "$sid" ?>" required="">
						</div>

                        <label>Email:</label>
                        <div class="form-group">
							<input type="text" name="t5" class="form-control" value="<?php echo "$email" ?>" required="">
						</div>

                        <label>Phone No:</label>
                        <div class="form-group">
							<input type="text" name="t6" class="form-control" value="<?php echo "$phno" ?>" required="">
						</div>

                        <label>Department:</label>
                        <div class="form-group">
							<input type="text" name="t7" class="form-control" value="<?php echo "$course" ?>" required="">
						</div>

                        <label>Course:</label>
                        <div class="form-group">
							<input type="text" name="t8" class="form-control" value="<?php echo "$batch" ?>" required="">
						</div>

                        <label>Semester:</label>
                        <div class="form-group">
							<input type="text" name="t9" class="form-control" value="<?php echo "$semid" ?>" required="">
						</div>

                        

               
						<input type="submit" name="submit" value="Update Now">
					</form>
					</br>
					</br>
					<?php
					}
				}
				else{
					echo "<script type = \"text/javascript\">
					alert(\"Sorry You Dont Have Any Request.\");
					window.location = (\"adminhome.html\")
				</script>";
				}
               ?>
				</div>
				
			</div>
		</div>
	</div>

    <?php
	// echo $fid;
    if(isset($_REQUEST['submit']))
{
	$ccid = $_REQUEST['t0'];
	$t1 = $_REQUEST['t1'];
	$t2 = $_REQUEST['t2'];
	$t3=$_REQUEST['t3'];
	$t4=$_REQUEST['t4'];
	$t5=$_REQUEST['t5'];
	$t6=$_REQUEST['t6'];
	$t7=$_REQUEST['t7'];
	$t8=$_REQUEST['t8'];

	$t9=$_REQUEST['t9'];



	
	$sid=$data['ovname'];

	$m="update student set name='$t1',rollno='$t2',dob='$t3',gender='$t4',email='$t5',phoneno='$t6',course='$t7',batch='$t8',semid='$t9' where sid='$ccid'";
	// echo $m;
	 $f=mysqli_query($conn,$m);
	echo "<script type=\"text/javascript\">
	 alert(\"SUCCESSFULLY EDITED \");
	 windows.location.href('investorhome.php');
	 </script>";
}
?>


<?php
include('footer.html');
?>