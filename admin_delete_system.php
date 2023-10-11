<?php
	include 'connection.php';
	$sid = $_REQUEST['id'];
	
	$query = "delete from system where stmid = '$sid'";
	$result = mysqli_query($conn,$query);
	
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Removed\");
					window.location = (\"admin_view_system.php\")
				</script>";
	}
?>