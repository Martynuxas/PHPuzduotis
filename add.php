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
                  <h2>Add</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="transac.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email" name="Email">
                            </div> 
                            <div class="form-group">
                              <input type="number" class="form-control" placeholder="Number" name="Number">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address">
                            </div> 
                            <div class="form-group">
                              <input type="datetime-local" class="form-control" placeholder="Date" name="Date">
                            </div>  
                            <button type="submit" class="btn btn-default">Save</button>
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

