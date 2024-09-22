<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$Mobile = $_POST['Mobile'];

//Database Connection 

$conn= new mysqli('localhost:3306','root','root','Userdata');
if ($conn ->connect_error){
    echo "conn -> connect_error";
    die("Connection faield:"
.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into `Userinfo`(`Name`,`Address`,`Email`,`Mobile`)values(?,?,?,?)");
    $stmt->bind_param("ssss",$Name,$Address,$Email,$Mobile);
    $execval = $stmt->execute();
    echo $execval;
    echo "submitted";
    $stmt->close();
    $conn->close();
}
?>