<?php 
include '../../config/connection.php'; 

$stmt = $pdo->query('SELECT * FROM usuario'); //execute essa ação //query->buscar
$usuarios = $stmt->fetchAll(); //irá buscar todos os dados,tem um array 


if( isset($_GET{'id'})){
    $id = $_GET['id'];
    echo "O id $id foi removido!";
}

?>


<?php  foreach ($usuarios as $indice => $user) {?>
    <p>
        <strong>Nome da Heroina:</strong><?php echo $user['username'];?>
        <a href="http://localhost/PWII/PDO_CRUD/public/usuario/delete.php?id=<?php echo $user['id'];?>">Remover</a>
        <a href="http://localhost/PWII/PDO_CRUD/public/usuario/update.php?id=<?php echo $user['id'];?>">Atualizar</a>
    </p>
    <hr>
<?php } ?>






