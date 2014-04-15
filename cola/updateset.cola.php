
<?php

// conecta no banco
$con=mysqli_connect("127.0.0.1","root","12345678","my_db");


//armazena a query numa variavel
$query = "UPDATE `my_db`.`persons` SET `FirstName` = '" . $_POST['NewFirstName']. "', LastName='" . $_POST['NewLastName'] . "' WHERE `persons`.`id` =" . $_POST['id'];

// executa a query
mysqli_query($con, $query);


// fecha a conexão com o banco de dados
mysqli_close($con);


// Volta para a index.php
header("location:index.php");

?>
