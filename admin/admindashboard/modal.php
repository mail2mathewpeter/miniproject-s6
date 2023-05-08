



<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center>
                        <h5 class="modal-title" id="myModalLabel">Allocate Driver For Caravan</h5>
                        
                    </center>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group input-group">
                        
                           
                            <span class="input-group-addon" style="width:150px;">Customer Name:</span>
                            <input type="text" style="width:300px;" class="form-control" id="caravan_name" readonly>
                        </div>
                        <div style="margin-left:150px;margin-top:-10px;">
                            <font color="red"><span id=""></span>
                                <font>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Select Driver:</span>
                            <?php
                                  
                                                                                    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                             $driver="select *from employee where employee_designation='Driver'";
                           
                           
                             $result3=mysqli_query($conn,$driver);
                             ?>
                            <select name="select" id="select" class="form-control">

                                <option value="">size
                                    </option>
                              
                                                
                                                  

                            </select>
                            </td>

                            </select>
                            <input type="hidden" style="width:300px;" name="file7" class="form-control" id="id1">
                            <input type="hidden" style="width:300px;" name="start" class="form-control" id="start">
                            <input type="hidden" style="width:300px;" name="end" class="form-control" id="end">



                        </div>
                        <div style="margin-left:150px;margin-top:-10px;">
                            <font color="red"><span id="text6"></span>
                                <font>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <input type="submit" value="Approve" name="sub" id="register" class="btn btn-success"><span
                        class="glyphicon glyphicon-edit"></span> </i> </button>
                </div>
            </div>
        </div>
</div>
<?php
    if(isset($_POST["sub"]))
{
    $id=$_POST["file7"];
    $driver= $_POST["select"];
    echo $driver;
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $query="update booking set driver='$driver',status='Approved' where booking_id='$id'";
    $mathew=mysqli_query($conn,$query);
   ?>

<script>
alert("Booking Has Been Successfully Approved ")
window.location.href = 'dashboard.php';
</script>
<?php
    }
?>