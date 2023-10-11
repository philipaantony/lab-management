<?php
include('connection.php');
include('aheader.html');
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
    <CENTER><h3>Attendence</h3></CENTER>
    <br>
    <br>   <center>
    <form method="post">
      
<input type="text" name="search" placeholder="Rollno//System no//Date//time">
<input type="submit" name="submit">

    </form>
</center>
<br>
    <br>
<table class="customers">
            <tr>
                   <th> System No</th>
                    <th> Rollno</th>
                    <th> Allocation Date</th>
                    <th>Login Time</th>
                    <th>Logout Time</th>
                    <th>Delete</th>

					
                   
                </tr>
<?php 
// $rollno=$_SESSION['rollno'];
 if (isset($_REQUEST['submit']))
 {
     $search=$_REQUEST['search'];
$date=date("Y/m/d");
$e="SELECT * FROM allocation where  allocation_date='$search' or logintime='$search' or allocation_time='$search' or sid='$search' or stmid='$search'";
// echo $e;
					$res=mysqli_query($conn,$e);
	  				
 }
 else{
$date=date("Y/m/d");
$e="SELECT * FROM allocation ";
// echo $e;
					$res=mysqli_query($conn,$e);
 }
	  				while($data=mysqli_fetch_assoc($res))
					{
            $aid=$data['aid'];
                        $id=$data['stmid'];
                        $id1 = $data['sid'];
                        $aid = $data['aid'];
                        $logintime=$data['logintime'];
                        $logouttime=$data['logouttime'];

						// $_SESSION['request']=$id;
                        // $_SESSION['rollno']=$id1;
						
						
					?>	
                <tr>
                <td><?php echo $id; ?></td>
                    <td><?php echo $id1;?></td>
                    <td><?php echo $data['allocation_date'];?></td>
                    <?php if ($logintime != '')
                    {
                     echo "   <td> $logintime</td>";
                    }
                    echo "<td> $logouttime </td>"

?>  

                
                <td><a href='admin_delete_allocation.php?id=<?php echo $aid;?>'>Delete</a></td>
                </tr>
					<?php }
						?>
						





            </table>        </center>
            <br>
            <br>
            <br>
            <br>


            <?php

include("footer.html")

?>