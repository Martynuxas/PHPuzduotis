<!DOCTYPE html>
<html lang="en">
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
                        <a href="index.php"></i> Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
<?php 
$query = 'SELECT * FROM people
              WHERE
              id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $resultId= $row['id'];
                $name= $row['name'];
                $email=$row['email'];
                $number=$row['number'];
                $address=$row['address'];
                $date = date("Y-m-d\TH:i:s", strtotime($row['date']));
              }
              $id = $_GET['id'];
?>
             <div class="col-lg-12">
                  <h2>Edit</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="editItem.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $resultId; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Name" name="Name" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email" name="Email" value="<?php echo $email; ?>">
                            </div> 
                            <div class="form-group">
                              <input type="number" class="form-control" placeholder="Number" name="Number" value="<?php echo $number; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address" value="<?php echo $address; ?>">
                            </div> 
                            <div class="form-group">
                              <input type="datetime-local" class="form-control" placeholder="Date" name="Date" value="<?php echo $date; ?>">
                            </div> 
                            <button type="submit" class="btn btn-default">Update</button>
                      </form>  
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

