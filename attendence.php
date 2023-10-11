<?php
include('connection.php');
include('sheader.html');
session_start();

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
            <th> Allocation Id</th>
                   <th> System No</th>
                    <th> Rollno</th>
                    <th>Date</th>
                    <th>Mark Entry</th>
                    <th>Mark Exit</th>
                    
					
                   
                </tr>
<?php 
$rollno=$_SESSION['rollno'];

$date=date("Y/m/d");
$e="SELECT * FROM allocation where allocation_date='$date' and sid='$rollno'";
// echo $e;
					$res=mysqli_query($conn,$e);
	  				while($data=mysqli_fetch_assoc($res))
					{
                        $id=$data['stmid'];
                        $id1 = $data['sid'];
                        $aid = $data['aid'];
                        $logintime=$data['logintime'];
                        $logouttime=$data['logouttime'];
                        $aldate=$data['allocation_date'];



						// $_SESSION['request']=$id;
                        // $_SESSION['rollno']=$id1;
						
						
					?>	
                <tr>
                <td><?php echo $aid; ?></td>
                <td><?php echo $id; ?></td>
                    <td><?php echo $id1;?></td>
                    <td><?php echo $aldate;?></td>
                    <?php if ($logintime != '')
                    {
                     echo "   <td> $logintime</td>";
                    }


else if($logintime == ''){ echo "
                    <form method='POST'>
                    <input type='hidden' name='id' value='$aid'>
					<td><input type='submit' value='Mark Attendence' name='submit'></td>
                    </form>";
 }                  ?>   
                    


                    <?php if ($logouttime != '')
                    {
                     echo "   <td> $logouttime</td>";
                    }


else if($logouttime == ''){ echo "
                    <form method='POST'>
                    <input type='hidden' name='id' value='$aid'>
					<td><input type='submit' value='Log Out' name='sub'></td>
                    </form>";
 }                  ?>  
                    <!-- <form method='POST'>
                    <input type='hidden' name='vid' value=<?php echo $aid;?>>
                    <input type='submit' name='sub' value='Log Out'> -->
                    </td>

                </tr>
					<?php }
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
    // $name=$_REQUEST["rollno"];
    // $name1=$_REQUEST["sno"];

    $date=date("Y/m/d");
    date_default_timezone_set("Asia/Kolkata");
    $asd=date('h:i:sa');
	
	// $a="insert into allocation(stmid,sid,allocation_date,allocation_time,status) values('$name1','$name','$date','$asd','approved')";
    // mysqli_query($conn,$a);
	// echo $a;

    $query = "update allocation set logintime ='$asd' where aid = '$rid'";
    // echo $query;
	$result = mysqli_query($conn,$query);

	echo "<script>alert(' Completed Successfully');
    window.location = (\"attendence.php\");
    </script>";
}
// 
if(isset($_REQUEST['sub']))
{
	// echo "hello000000000000000000000";
    $rid=$_REQUEST["id"];
    // $name=$_REQUEST["rollno"];
    // $name1=$_REQUEST["sno"];

    $date=date("Y/m/d");
    date_default_timezone_set("Asia/Kolkata");
    $asd=date('h:i:sa');

	// $a="insert into allocation(stmid,sid,allocation_date,allocation_time,status) values('$name1','$name','$date','$asd','approved')";
    // mysqli_query($conn,$a);
	echo $asd;

    $query = "update allocation set logouttime ='$asd',status='logout' where aid = '$rid'";
    echo $query;
	$result = mysqli_query($conn,$query);

	echo "<script>alert(' Completed Successfully');
    window.location = (\"index.html\");
    </script>";

    //  
}
include("footer.html")

?>