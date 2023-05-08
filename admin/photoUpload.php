<?php
if(isset($_POST['photoStore'])) {
    $encoded_data = $_POST['photoStore'];
    $binary_data = base64_decode($encoded_data);

    $photoname = uniqid().'.jpeg';

    $result = file_put_contents('uploadPhoto/'.$photoname, $binary_data);

    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $query ="update admin set 'file='$cfile'";
    $mathew=mysqli_query($conn,$query);
    echo $query;
    if($result) {
        echo 'success';
    } else {
        echo die('Could not save image! check file permission.');
    }
}