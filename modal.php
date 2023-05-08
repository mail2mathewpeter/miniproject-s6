<script>
$(document).ready(function() {
    var mod1 = 0;
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
        $("#register").click(function() {
           
            if (mod1 == 1 || mod2 == 1 || mod3 == 1 || mod4 == 1 || mod5 == 1 || mod6 == 1) {
                $('#register').attr("disabled", true);
                
                $('#register').css("background", "lightblue");
            }
        });
});
</script>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action=""method="POST" enctype="multipart/form-data">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center>
                        <h5 class="modal-title" id="myModalLabel">Update Caravan Images</h5>
                    </center>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;"><b>Customer Name</b></span>
                            <input type="text" style="width:300px;" class="form-control" id="customer_name" readonly>
                        </div>
                       
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;"><b>Customer Mobile No</b></span>
                            <input type="text" style="width:300px;" class="form-control" id="number" readonly>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;"><b>Caravan Name</b></span>
                            <input type="text" style="width:300px;" name="file1" class="form-control" id="caravan_name" readonly
                                id="inputfileupload1" accept="image/png,image/gif,image/jpeg"
                              >

                        </div>
                        
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;"><b>start Date</b></span>
                            <input type="text" style="width:300px;" name="file2" class="form-control"id="start_date" readonly
                                id="inputfileupload2" accept="image/png,image/gif,image/jpeg"
                            >

                        </div>
                       
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;"><b>End Date</b></span>
                            <input type="text" style="width:300px;" name="file3" class="form-control"id="end_date" readonly
                                id="inputfileupload3" accept="image/png,image/gif,image/jpeg"
                              >
                              <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;"><b>Adults</b></span>
                            <input type="text" style="width:300px;" name="file3" class="form-control"id="adults" readonly
                                id="inputfileupload3" accept="image/png,image/gif,image/jpeg"
                              >
                              <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;"><b>Children</b></span>
                            <input type="text" style="width:300px;" name="file3" class="form-control"id="children" readonly
                                id="inputfileupload3" accept="image/png,image/gif,image/jpeg"
                              >

                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;"><b>Amount</b></span>
                            <input type="text" style="width:300px;" name="file4" class="form-control"id="amount" readonly
                                id="inputfileupload4" accept="image/png,image/gif,image/jpeg"
                                >

                        </div>
                     
                        <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">   <b> Driver Allocated</span></b>
                            <input type="text" style="width:300px;" name="file5" class="form-control"id="driver" readonly
                                id="inputfileupload5" accept="image/png,image/gif,image/jpeg"
                                >
</div>
                                <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">   <b> Driver Mobile No</span></b>
                            <input type="text" style="width:300px;" name="file5" class="form-control"id="employeeno" readonly
                                id="inputfileupload5" accept="image/png,image/gif,image/jpeg"
                                >

                        </div>
                        <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">   <b>Tourist Place</span></b>
                            <input type="text" style="width:300px;" name="file5" class="form-control"id="place" readonly
                                id="inputfileupload5" accept="image/png,image/gif,image/jpeg"
                                >

                        </div>
                      
                       
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Cancel</button>
                  
                </div>
            </div>
        </div>
</div>
<?php
    if(isset($_POST["sub"]))
{
    $id=$_POST["file7"];
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $query="select *from imagescaravan where caravan_id='$id'";
    $mathew=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($mathew))
    {
    $file8=$row["file1"];
    $file9=$row["file2"];
    $file10=$row["file3"];
    $file11=$row["file4"];
    $file12=$row["file5"];
    $file13=$row["file6"];

    }
    $ifile= $_FILES["file1"]["name"];
    if($ifile=="")
    {
        $ifile=$file8;
    }
    $pfile=$_FILES["file2"]["name"];
    if($pfile=="")
    {
        $pfile=$file9;
    }
    $kfile=$_FILES["file3"]["name"];
    if($kfile=="")
    {
        $kfile=$file10;
    }
    $jfile=$_FILES["file4"]["name"];
    if($jfile=="")
    {
        $jfile=$file11;
    }
    $qfile=$_FILES["file5"]["name"];
    if($qfile=="")
    {
        $qfile=$file12;
    }
    $rfile=$_FILES["file6"]["name"];
    if($rfile=="")
    {
        $rfile=$file13;
    }
    $id=$_POST["file7"];
   // $username=$_POST["username"];
 
    $date=date("d-m-y");
 
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $query="update imagescaravan set file1='$ifile',file2='$pfile',file3='$kfile',file4='$jfile',file5='$qfile',file6='$rfile'where caravan_id='$id'";
	//$query="insert into caravan(caravan_name,caravan_model,caravan_type,caravan_redate,caravan_regno,caravan_image,caravan_pollution,status)values('$caravan_name','$model_name','$type','$date','$caravan_reg','$ifile','$pfile','$id')";
    $mathew=mysqli_query($conn,$query);
    if($mathew)
	{
        $targetdir="uploads/";
				$targetfilepath=$targetdir.basename($ifile);
				move_uploaded_file($_FILES["file1"]["tmp_name"],$targetfilepath);
                $targetfilepath=$targetdir.basename($pfile);
                move_uploaded_file($_FILES["file2"]["tmp_name"],$targetfilepath);
                $targetfilepath=$targetdir.basename($kfile);
                move_uploaded_file($_FILES["file3"]["tmp_name"],$targetfilepath);
                $targetfilepath=$targetdir.basename($jfile);
                move_uploaded_file($_FILES["file4"]["tmp_name"],$targetfilepath);
                $targetfilepath=$targetdir.basename($qfile);
                move_uploaded_file($_FILES["file5"]["tmp_name"],$targetfilepath);
                $targetfilepath=$targetdir.basename($rfile);
                move_uploaded_file($_FILES["file6"]["tmp_name"],$targetfilepath);
				
		?>

<script>
alert("Successfully updated Caravan Images")
window.location.href = 'viewaddimages.php';
</script>
<?php
    }
       
    
}
?>