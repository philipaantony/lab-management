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
    <CENTER><h3>SYSTEMS</h3></CENTER>
    <br>
    <br> 

<table class="customers">
            <tr>
                   <th> ID</th>
                    <th> SYSTEM</th>
                    <th>Operating System</th>
                    <th>Add Specification</th>
					
                   
                </tr>
<?php 
$e="SELECT * FROM system";
					$res=mysqli_query($conn,$e);
	  				while($data=mysqli_fetch_assoc($res))
					{
                        $id1 = $data['stmid'];
						$id = $data['system'];
						$na = $data['os'];
						
						echo "
                <tr>
                <td>$id1</td>
                    <td>$id</td>
                    <td>$na</td>
                   
					<td><div><a href='admin_add_specification.php?id=$id1'>Add Specification</a></div></td>
					<td><div><a href='admin_delete_system.php?id=$id1'>Delete System</a></div></td>

                </tr>";
					}
						?>
						





            </table>        </center>
            <br>
            <br>
            <br>
            <br>

<?php

include('footer.html');
?>