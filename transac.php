<?php  
       include('connection.php');
       include('header.php');
        ?>   
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
             <div class="col-lg-12">
                <?php
						$name = $_POST['Name'];
					    $email = $_POST['Email'];
						$number = $_POST['Number'];
						$address = $_POST['Address'];
						$date = $_POST['Date'];

					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO people
								(id, name, email, number, address,date)
								VALUES ('Null','".$name."','".$email."','".$number."','".$address."','$date')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
		</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>

</html>

