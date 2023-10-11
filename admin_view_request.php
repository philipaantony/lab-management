<?php
include('connection.php');
include('aheader.html');

?>
<style>
.customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin: auto;
    width: auto; 
    align-items: center;
    align-self: center;
    align-content: center;
    padding-bottom: 100px;

}
  
  .customers td, .customers th {
    border: 1px solid #ddd;
    padding: 8px;
    /* margin-right: 90px; */
  }
  
  .customers tr:nth-child(even){background-color: #f2f2f2;}
  
  .customers tr:hover {background-color: #ddd;}
  
  .customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
    width: auto;
  }
  </style>
    <br>
    <br>
    <br>
    <CENTER><h3>View Request</h3></CENTER>
    <br>
    <br> 

<table class="customers">
            <tr>
                   <th> ID</th>
                    <th> Rollno</th>
                    <th>System</th>
                    <th>Add</th>
                    
					
                   
                </tr>
<?php 

$date=date("Y/m/d");
$e="SELECT * FROM request where rdate='$date' and allocate='requested'";
					$res=mysqli_query($conn,$e);
	  				while($data=mysqli_fetch_assoc($res))
					{
                        $id=$data['rid'];
                        $id1 = $data['rollno'];
						$_SESSION['request']=$id;
                        $_SESSION['rollno']=$id1;
						
						
						echo "
                <tr>
                <td>$id</td>
                    <td>$id1</td>
                    <td>
                    <form method='POST'>
                    <input type='hidden' name='id' value='$id'>
                    <input type='hidden' name='rollno' value='$id1'>


                    <input type='text'  class='user-input' placeholder='System No' name='sno' required=''>
                    </td>
					<td><input type='submit' name='submit'></td>
                    </form>
                </tr>";
					}
						?>
						





            </table>        </center>
            <br>
            <br>
            <br>
            <br>


            <?php

if(isset($_REQUEST['submit']))
{
	// echo "hello";
    $rid=$_REQUEST["id"];
    $name=$_REQUEST["rollno"];
    $name1=$_REQUEST["sno"];

    $date=date("Y/m/d");
    date_default_timezone_set("Asia/Kolkata");
    $asd=date('h:i:sa');
	
	$a="insert into allocation(stmid,sid,allocation_date,allocation_time,status) values('$name1','$name','$date','$asd','approved')";
    mysqli_query($conn,$a);
	// echo $a;

    $query = "update request set allocate ='allocated' where rid = '$rid'";
    // echo $query;
	$result = mysqli_query($conn,$query);

	echo "<script>alert(' Completed Successfully')
    window.location.href='admin_view_request.php';
    </script>";
}
include("footer.html")

?>