<?php
require("conexao.php");
$id = $_POST['id'];

$excluir = mysqli_query($con,"delete from cliente where id = '".$id."'") or die(mysqli_error($con));

echo "<script>alert('Cliente excluido com sucesso');document.getElementById('btn-pesq-clientes').click();</script>";
