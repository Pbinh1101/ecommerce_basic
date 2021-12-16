<?php 

include '../../dbconnect.php';

if(!isset($_GET['id'])){
    echo 'span';
    die();
}

// do du lieu
$brandId = $_GET['id'];
$stmt = $pdo->prepare('SELECT * from brands where id = :id' );
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('id'=> $brandId));


?>