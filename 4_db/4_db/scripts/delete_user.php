<?php
//print_r($_GET);
require_once "./connect.php";
//$sql = "DELETE FROM users WHERE `users`.`id` = 2";
//$sql = "DELETE FROM users WHERE `users`.`firstName` = 'Janusz'";
$sql = "DELETE FROM users WHERE `users`.`id` = '$_GET[userDeleteId]'";
$conn->query($sql);
//echo $conn->affected_rows;
if ($conn->affected_rows == 0){
    //echo "error";
header(header:"location: ../3_db_table_delete.php?userIdDelete=0");
}else{
    //echo "ok";
    header(header:"location: ../3_db_table_delete.php?userIdDelete=$_GET[userDeleteId]");
}