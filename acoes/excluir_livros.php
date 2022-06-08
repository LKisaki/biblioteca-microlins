<?php
require("conexao.php");
$id = $_POST['id'];

$excluir = mysqli_query($con,"delete from livros where id = '".$id."'") or die(mysqli_error($con));

echo "<script>alert('Item excluido com sucesso');document.getElementById('btn-pesq-livros').click();</script>";
