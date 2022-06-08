<?php
require("conexao.php");
$id = $_POST['id'];
$select = mysqli_query($con,"select * from livros where id = '".$id."' ") or die(mysqli_error($con));
$sql = mysqli_fetch_assoc($select);

echo "<script>document.getElementById('titulo_ed_modal').value = '".$sql['titulo']."';</script>";
echo "<script>document.getElementById('autor_ed_modal').value = '".$sql['autor']."';</script>";
echo "<script>document.getElementById('dt_lancamento_ed_modal').value = '".$sql['dt_lancamento']."';</script>";
echo "<script>document.getElementById('sinpose_ed_modal').value = '".$sql['sinopse']."';</script>";
