<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
error_reporting(0);
?>
<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <!-- Left side column. contains the logo and sidebar -->
        You're welcome: <?php echo $a_name; ?>
        <?php include('menu_left.php');?>
        <!-- Content Wrapper. Contains page content -->
      </div>

      <div class="col-md-6">
        <a href="product.php?act=add" class="btn-info btn-sm"> ເພີ່ມ </a>
        <p></p>
        <?php
$act = $_GET['act'];
if($act == 'add'){
include('product_form_add.php');
}elseif ($act == 'edit') {
include('product_form_edit.php');
}
else {
include('product_list.php');
}
?>
      </div>
    </div>
  </div>
  </body>
</html>