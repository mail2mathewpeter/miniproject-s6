
<script>
$(document).ready(function() {
    var mod1 = 1;
    var mod2 = 0;
    var mod3 = 0;
    var mod4 = 0;
    var mod5 = 0;
    var mod6 = 0;
    $("#inputfileupload1").change(function() {
            var fileInput =
                document.getElementById('inputfileupload1');

            var filePath = fileInput.value;

            // Allowing file type
            var allowedExtensions =
                /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            if (!allowedExtensions.exec(filePath)) {

                document.getElementById("text1").innerHTML = "<span class='error'>invalid file type</span>";
                fileInput.value = '';
                $('#register').attr("disabled", true);
                $('#register').css("background", "lightblue");
                mod1 = 1;
                return false;


            } else {
                document.getElementById("text1").innerHTML = "<span class='error'></span>";
                $('#register').attr("disabled", false);
                $('#register').css("background", "#2ed8b6");
                mod1 = 0;

            }
        }),

        $("#inputfileupload2").change(function() {
            var fileInput =
                document.getElementById('inputfileupload2');

            var filePath = fileInput.value;

            // Allowing file type
            var allowedExtensions =
                /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            if (!allowedExtensions.exec(filePath)) {

                document.getElementById("text2").innerHTML = "<span class='error'>invalid file type</span>";
                fileInput.value = '';
                $('#register').attr("disabled", true);
                $('#register').css("background", "lightblue");
                mod2 = 1;
                return false;


            } else {
                document.getElementById("text2").innerHTML = "<span class='error'></span>";
                $('#register').attr("disabled", false);
                $('#register').css("background", "#2ed8b6");
                mod2 = 0;

            }
        }),
        $("#inputfileupload3").change(function() {
            var fileInput =
                document.getElementById('inputfileupload3');

            var filePath = fileInput.value;

            // Allowing file type
            var allowedExtensions =
                /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            if (!allowedExtensions.exec(filePath)) {

                document.getElementById("text3").innerHTML = "<span class='error'>invalid file type</span>";
                fileInput.value = '';
                $('#register').attr("disabled", true);
                $('#register').css("background", "lightblue");
                mod3 = 1;
                return false;


            } else {
                document.getElementById("text3").innerHTML = "<span class='error'></span>";
                $('#register').attr("disabled", false);
                $('#register').css("background", "#2ed8b6");
                mod3 = 0;

            }
        }),
        $("#inputfileupload4").change(function() {
            var fileInput =
                document.getElementById('inputfileupload4');

            var filePath = fileInput.value;

            // Allowing file type
            var allowedExtensions =
                /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            if (!allowedExtensions.exec(filePath)) {

                document.getElementById("text4").innerHTML = "<span class='error'>invalid file type</span>";
                fileInput.value = '';
                $('#register').attr("disabled", true);
                $('#register').css("background", "lightblue");
                mod4 = 1;
                return false;


            } else {
                document.getElementById("text4").innerHTML = "<span class='error'></span>";
                $('#register').attr("disabled", false);
                $('#register').css("background", "#2ed8b6");
                mod4 = 0;

            }
        }),
        $("#inputfileupload5").change(function() {
            var fileInput =
                document.getElementById('inputfileupload5');

            var filePath = fileInput.value;

            // Allowing file type
            var allowedExtensions =
                /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            if (!allowedExtensions.exec(filePath)) {

                document.getElementById("text5").innerHTML = "<span class='error'>invalid file type</span>";
                fileInput.value = '';
                $('#register').attr("disabled", true);
                $('#register').css("background", "lightblue");
                mod5 = 1;
                return false;


            } else {
                document.getElementById("text5").innerHTML = "<span class='error'></span>";
                $('#register').attr("disabled", false);
                $('#register').css("background", "#2ed8b6");
                mod5 = 0;


            }
        }),
        $("#inputfileupload6").change(function() {
            var fileInput =
                document.getElementById('inputfileupload6');

            var filePath = fileInput.value;

            // Allowing file type
            var allowedExtensions =
                /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            if (!allowedExtensions.exec(filePath)) {

                document.getElementById("text6").innerHTML = "<span class='error'>invalid file type</span>";
                fileInput.value = '';
                $('#register').attr("disabled", true);
                $('#register').css("background", "lightblue");
                mod6 = 1;
                return false;


            } else {
                document.getElementById("text6").innerHTML = "<span class='error'></span>";
                $('#register').attr("disabled", false);
                $('#register').css("background", "#2ed8b6");
                mod6 = 0;

            }
        }),
        $("#select").change(function() {
            var n = document.getElementById("select").value;
            if (n == "") {
                $('#register').attr("disabled", true);

                $('#register').css("background", "lightblue");
                mod1 = 1;
            } else {
                $('#register').attr("disabled", false);

                $('#register').css("background", "#2ed8b6");
                mod1 = 0;

            }
        }),

        $("#register").click(function() {

            if (mod1 == 1) {
                $('#register').attr("disabled", true);

                $('#register').css("background", "lightblue");
            }
        });
});
</script>
<script>
$(document).ready(function() {
    var mod7 = 1;
    $('#select').click(function() {
         

            var email1 = $(this).val();
            email1 = document.getElementById("id1").value;
       
alert(email1);
          
            
                $.ajax({
                    url: 'employeecheck.php',
                    method: "POST",
                    data: {
                        email1: email1
                       
                    },
                    success: function(data){
                      
                      alert(data);
                        if (data != '0') {
                           
                            //  $('#availability').html('<span class="text-danger">Username Already exist</span>');
                            document.getElementById("availability").innerHTML =
                                "<span class='error'>Already Booked the date</span>";

                            $('#availability').css("color", "red");
                            $('#register').attr("disabled", true);
                            $('#register').css("background", "lightblue");
                            mod7 = 1;


                        } else {


                            document.getElementById("availability").innerHTML =
                                "<span class='error1'>Avaliable</span>";
                            $('#register').attr("disabled", false);
                            $('#register').css("background", "blue");
                            mod7 = 0


                        }
                    }
                })
            
        });
    });
    </script>
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
                            <div id="id"></div>
                           
                            <span class="input-group-addon" style="width:150px;">Customer Name:</span>
                            <input type="text" style="width:300px;" class="form-control" id="caravan_name" readonly>
                        </div>
                       
                     
                        
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Select Driver:</span>
                            <?php
                                  
                                                                                    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                             $driver="select *from employee where employee_designation='Driver'";
                           
                           
                             $result3=mysqli_query($conn,$driver);
                             ?>
                            <select name="select" id="select" class="form-control">

                                <option value="none" selected disabled hidden>Enter your
                                    choice</option>
                                

                            </select>
                            </td>

                         <p id="availability">
                        
                            <input hidden type="text" style="width:300px;" name="id1" class="form-control" id="id1">
                           


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