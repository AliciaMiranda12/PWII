<?php 
include '../../config/connection.php'; 

 $id = isset($_GET['id']) ? $_GET['id'] : exit();

    echo $id;

    if(empty($id)){
        echo 'É necessário informar o codigo!!';
        exit();
    }

    $stmt = $pdo->prepare('DELETE FROM usuario WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    Header("Location: read.php?id=$id");
?>






