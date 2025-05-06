<?php 
include '../../config/connection.php'; 

$stmt = $pdo->query('SELECT * FROM usuario'); //execute essa ação //query->buscar
$usuarios = $stmt->fetchAll(); //irá buscar todos os dados,tem um array 

//$usuarios = {
//     'id ' => 0,
//     'username' =>
// }

// echo "<pre>";
// echo var_dump($usuarios);  
?>


<?php  foreach ($usuarios as $indice => $user) {?>
    <p>
        <strong>Nome da Heroina:</strong><?php echo $user['username'];?>
    </p>
    <hr>
<?php } ?>






