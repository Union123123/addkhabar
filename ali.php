<?php
include_once ('connect.php');

if( isset( $_GET[ 'submit' ] ) ) {


$onvan = $_POST['onvan'];
$news  = $_POST['news'];


$stmt=$strConn->prepare("INSERT INTO tbl_khabar (onvan,news)
                        VALUES (onvan, news )");


//$stmt->bindParam(':monvan', $onvan);
//$stmt->bindParam(':mnews', $news);

}
$stmt->execute();




?>


