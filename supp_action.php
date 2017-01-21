<?php
include_once "dbconnect'.php";
if(isset($_POST['action'])=="add"){
    //add
    $name = $_POST['supp_name'];
    $sql = "INSERT INTO supplier(supp_name) VALUES ('$name')";
    $query = mysqli_query($dbconnect,$sql);
    if($query){
        header('location:addsupplier.php');
    }
}else{
    //edit
}
?>