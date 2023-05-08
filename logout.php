<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
$_SESSION["name1"]="";
$_SESSION["loginstatus"]="";
header("location:index.html");
?>
</body>
</html>