<?php
    include_once "dbconnect'.php";
    if(isset($_POST['action'])=="add"){
        //add
        $name = $_POST['cat_name'];
        $sql = "INSERT INTO category(cat_name) VALUES ('$name')";
        $query = mysqli_query($dbconnect,$sql);
        if($query){
            header('location:addcategory.php');
        }
    }else{
        //edit
    }
?>