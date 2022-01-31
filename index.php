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
            <div class="col-lg-12">
            <a href="export.php" type="button" class="btn btn-xs btn-info">EXPORT DATA TO CSV</a>
            <form class="form-horizontal" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
            <button type="submit" id="submit" name="Import" value="IMPORT" class="btn btn-xs btn-info" data-loading-text="Loading...">IMPORT DATA FROM CSV<input type="file" name="file" id="file" class="input-large"></button>
                </form>
                        <h2>Select date</h2>
                        <div class="input-date">
                        <form role="form" method="post" action="sortedIndex.php">
                            <div class="input-date">
                                <input type="date" class="form-control" placeholder="Date" onchange='this.form.submit()' name="Date" value="<?php echo $date; ?>">
                            </div> 
                         </form>  
                        </div>
                        <a href="add.php" type="button" class="btn btn-xs btn-success">ADD</a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Apartment address</th>
                                        <th>Date and Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                    $query = 'SELECT * FROM people ORDER BY date';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['id'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
                            echo '<td>'. $row['number'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                            echo '<td>'. $row['date'].'</td>';
                            echo '<td> <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=people&delete & id=' . $row['id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </style>
<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("import", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
