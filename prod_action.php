<?php
include_once "dbconnect'.php";
if(isset($_POST['action'])=="add"){
    //add
    $name = $_POST['prod_name'];
    $rate = $_POST['prod_rate'];
    $catid = $_POST['cat_id'];
    $suppid = $_POST['supp_id'];
    $sql = "INSERT INTO product SET prod_name='$name',prod_rate=$rate,cat_id=$catid,supp_id=$suppid";
    $query = mysqli_query($dbconnect,$sql);
    if($query){
        header('location:addproduct.php');
    }
}else{
    //edit
}
?>