<!DOCTYPE html>
<html>
<head>
<title>Load content Dynamically in Bootstrap Modal with Jquery AJAX PHP and Mysql</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body >
<div class="container">
   <br />
   <h3 align="center">Load content Dynamically in Bootstrap Modal with Jquery AJAX PHP and Mysql</h3>
   <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
            <?php 
                include "dbcon.php";
                $query = "select * from employee";
                $result = mysqli_query($conn,$query);
            ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="60">Photo</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Salary</th>
                            <th>View</th>
                        </tr>
                        </thead> 
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><img src="images/<?php echo $row['photo']; ?>" height="50" width="50"/></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['position']; ?></td>
                                <td><?php echo $row['office']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['salary']; ?></td>
                                <td><button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-success">Info</button></td>
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>    
    </div>    
    </div>
</div>    
            <script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'ajaxfile.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
        </div>
        <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">User Info</h4>
                          <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>