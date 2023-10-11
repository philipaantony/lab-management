<?php
	include 'connection.php';
	$sid = $_REQUEST['spid'];
	
	$query = "delete from specification where spid = '$sid'";
	$result = mysqli_query($conn,$query);
	
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Removed\");
					window.location = (\"admin_view_specification.php\")
				</script>";
	}
?>