
<?php
include("connection.php");
include('oheader.php');
?>



<style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>



<center>


					<h4 class="font-italic mb-4">View Products</h4>
                    <table id="customers" border="3">
                        
                    <tr>
                        <td>
                          Sid  
                        </td>
                        <td>
                          Product Name
                        </td>
                        <td>
                          Price
                        </td>
                        <td>
                       Stock
                        </td>
                        </tr>
					<?php
session_start();
// $sid=$_REQUEST['sid'];
$oid=$_SESSION['oid'];
$ret=" SELECT * FROM stock where oid=$oid ";
// echo $ret;
					$re=mysqli_query($conn,$ret);
				
					 if ($re)
				 {
	  				while($data=mysqli_fetch_assoc($re))
					{
                        $id = $data['sid'];
                        $stockid = $data['stockid'];
						// echo $id;
						$fid = $data['pname'];
						$question=$data['price'];
						$answer=$data['stock'];
						
                       
					?>
					
                    <tr>
                        <td>
                            <?php
                            echo $stockid;
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $fid;
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $question;
                            ?>
                        </td>
                       
                      
                        
                        <td>
                            <a href="delete_stock.php?id=<?php echo $id;?>">delete</a>
                            <?php
          }
                            ?>
                        </td>
                    </tr>
                    </table>
                    </center>
					</br>
					</br>
               <?php
				

}
else {
   echo "<script type = \"text/javascript\">
alert(\"Sorry You Dont Have Any Question.\");

</script>";
   

}
?>
			
			
    <?php
    if(isset($_REQUEST['submit']))
{
	$id = $_REQUEST['t1'];
	$fid = $_REQUEST['t2'];
	$question=$_REQUEST['t3'];
	$answer=$_REQUEST['t4'];
	$t5=$_REQUEST['t5'];

	// $sid=$_SESSION['ovname'];
	// echo "$id, $fid, $question, $answer";
	$m="update staff set sname='$fid',email='$question',address='$t5',phno='$answer' where sid='$id'";
	 $f=mysqli_query($conn,$m);
	echo "<script type=\"text/javascript\">
	 alert(\"SUCCESSFULLY EDITED \");
	 
	 </script>";
}
?>


<?php
// include('common_footer.php');
?>