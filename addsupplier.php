<?php
include_once "menu.php";
if(isset($_GET['supp_id'])){
    $action = "edit";
}else{
    $action = "add";
}
?>
<form method="post" action="supp_action.php">
    <input type="hidden" name="action" value="<?=$action?>">
    <label>Supplier Name</label>
    <input type="text" name="supp_name" placeholder="Supplier Name">
    <label>Category</label>
    <input type="submit" name="sub_supp" value="Add supplier">
</form>