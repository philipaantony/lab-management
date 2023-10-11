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
    <CENTER><h3></h3></CENTER>
    <br>
    <br> 

<table class="customers">
            <tr>
                   <!-- <th> ID</th> -->
                    <th> SYSTEM ID</th>
                    <th>Roll NO</th>
                    <th>ALLOCATION DATE</th>
                    <th>ALLOCATION TIME</th>
                    <th>LOGIN TIME</th>
                    <th>LOGOUT TIME</th>

					
                   
                </tr>
<?php 
$e="SELECT * from allocation ";
					$res=mysqli_query($conn,$e);
	  				while($data=mysqli_fetch_assoc($res))
					{
                        $id1 = $data['stmid'];
						$id = $data['sid'];
						$na = $data['allocation_date'];
						$na12 = $data['allocation_time'];

                        $na1 = $data['logintime'];
                        $spid = $data['logouttime'];
                       
						echo "
                <tr>
           
                <td>$id1</td>
                    <td>$id</td>
                    <td>$na</td>
                    <td>$na12</td>

                    <td>$na1</td>
                    <td>$spid</td>
					
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