<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
			$id = $_POST['id'];
			$name = $_POST['Name'];
		    $email = $_POST['Email'];
			$number = $_POST['Number'];
			$address = $_POST['Address'];
			$date = $_POST['Date'];

	   include('connection.php');
		
	 			$query = 'UPDATE people set name ="'.$name.'", email ="'.$email.'", number="'.$number.'",
					address="'.$address.'",date="'.$date.'" WHERE
					id ="'.$id.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));		
?>	
	<script type="text/javascript">
			alert("Updated Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>