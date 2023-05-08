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
                        <h5 class="modal-title" id="myModalLabel">Customer Details</h5>
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
                            <span class="input-group-addon" style="width:150px;">Email:</span>
                            <input type="text" style="width:300px;" name="file1" class="form-control"
                                id="email" accept="image/png,image/gif,image/jpeg"readonly
                              >

                        </div>
                        <div style="margin-left:150px;margin-top:-10px;">
                            <font color="red"><span id="text1"></span>
                                <font>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Phone:</span>
                            <input type="text" style="width:300px;" name="file1" class="form-control"
                                id="phone" accept="image/png,image/gif,image/jpeg"readonly
                              >

                        </div>
                        <div style="margin-left:150px;margin-top:-10px;">
                            <font color="red"><span id="text1"></span>
                                <font>
                        </div>
                       
                     
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Gender:</span>
                            <input type="text" style="width:300px;" name="file6" class="form-control"
                                id="gender" accept="image/png,image/gif,image/jpeg"readonly
                              >




                        </div>
                        <div style="margin-left:150px;margin-top:-10px;">
                            <font color="red"><span id="text6"></span>
                                <font>
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;"> Date:</span>
                            <input type="text" style="width:300px;" name="file3" class="form-control"
                                id="date" accept="image/png,image/gif,image/jpeg"readonly
                              >
                     
                        </div>
                       
                        
                            <span class="input-group-addon" style="width:150px;">About Our Trip</span>
                            <div class="form-group input-group">
                            <textarea name="about" rows="6" cols="114"width="677"  placeholder="About Our Trip"disabled
                                            id="description"></textarea>
                     
                        </div>
                       
                          
                           
                            <span class="input-group-addon" style="width:150px;">Things To Improve</span>
                            <div class="form-group input-group">
                            <textarea name="improve" rows="6" cols="114"width="677"  placeholder="Things To Improve" disabled
                                            id="needstoimprove"></textarea>
                     
                        </div>  
                    
                         
                            <input type="hidden" style="width:300px;" name="file7" class="form-control" id="id">



    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Cancel</button>

                        
                </div>
            </div>
        </div>
</div>
   