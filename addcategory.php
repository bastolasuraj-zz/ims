<?php
    include_once "menu.php";
    if(isset($_GET['cat_id'])){
        $action = "edit";
    }else{
        $action = "add";
    }
?>
<form method="post" action="cat_action.php">
    <input type="hidden" name="action" value="<?=$action?>">
    <label>Category Name</label>
    <input type="text" name="cat_name" placeholder="Category Name">
    <input type="submit" name="sub_cat" value="Add Category">
</form>