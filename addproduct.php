<?php
include_once "menu.php";
if(isset($_GET['prod_id'])){
    $action = "edit";
}else{
    $action = "add";
}

?>
<form method="post" action="prod_action.php">
    <input type="hidden" name="action" value="<?=$action?>">
    <label>Product Name</label>
    <input type="text" name="prod_name" placeholder="Product Name">
    <label>Rate</label>
    <input type="text" name="prod_rate" placeholder="Rate">
    <label>Category</label>
    <select name="cat_id">
        <option>Select Category</option>
        <?php
        $sql = "SELECT cat_id,cat_name FROM category";
        $query = mysqli_query($dbconnect,$sql);
        while($fetch = mysqli_fetch_assoc($query)):
        ?>
        <option value="<?=$fetch['cat_id']?>"><?=$fetch['cat_name']?></option>
        <?php
        endwhile;
        ?>
    </select>
    <label>Supplier</label>
    <select name="supp_id">
        <option>Select Supplier</option>
        <?php
        $sql = "SELECT supp_id,supp_name FROM supplier";
        $query = mysqli_query($dbconnect,$sql);
        while($fetch = mysqli_fetch_assoc($query)):
            ?>
            <option value="<?=$fetch['supp_id']?>"><?=$fetch['supp_name']?></option>
            <?php
        endwhile;
        ?>
    </select>
    <input type="submit" name="sub_prod" value="Add Product">
</form>