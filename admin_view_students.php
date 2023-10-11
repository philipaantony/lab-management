<?php
include('connection.php');
include('aheader.html');
?>
<style>
.customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  /* padding: auto; */
  padding-left: 40px;
  margin-left: 20px;
  margin-right: 50px;
}

.customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

    </style>
    <br>
    <br>
    <br>
    <CENTER><h3>Students Details</h3></CENTER>
    <br>
    <br> 
<center>
<table style="padding: 10px 10px 10px 10px;" class="customers">
            <tr>
                   <!--<th> ID</th>-->
                    <th> NAME</th>
                    <th>ROLL NO</th>
                    <th>DATE OF BIRTH</th>
                    <th>GENDER</th> 
                     <th>EMAIL</th>
                    <th>PHONE NO</th>
                   
                    <th>BATCH</th>
                    <th>DELETE</th>
                    <th>UPDATE</th>


                   

					
                   
                </tr>
<?php 
$b="SELECT * FROM student ";
					$res=mysqli_query($conn,$b);
	  				while($data=mysqli_fetch_assoc($res))
					{
                       $sid = $data['sid'];
						$id = $data['name'];
						$na = $data['rollno'];
						$fon=$data['dob'];
            $fo=$data['gender'];
						$email=$data['email'];
						$job=$data['phoneno'];
					
						$an=$data['batch'];
					

						echo "
                <tr>
                
                    <td>$id</td>
                    <td>$na</td>
                    <td>$fon</td>
                    <td>$fo</td>
				
                    <td>$email</td>
                    <td>$job</td>
                  
                    
                    <td>$an</td>
                   
                    <td><a href='admin_delete_students.php?id=$sid'>Delete</a></td>
                    <td><a href='admin_update_students.php?id=$sid'>Update</a></td>

                    
					
                </tr>";
					}
						?>
						





            </table>        </center>
            <br>
            <br>
            <br>
<?php

include('footer.html');
?>