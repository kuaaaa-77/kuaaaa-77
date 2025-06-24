<?php
include('condb.php');

$type_name = $_POST['type_name'];

$sql ="INSERT INTO tbl_type
    
    (type_name) 

    VALUES 

    ('$type_name')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('ເພີ່ມຂໍ້ມູນສຳເລັດ');";
      echo "window.location ='type.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້');";
      echo "window.location ='type.php'; ";
      echo "</script>";
    }
?>