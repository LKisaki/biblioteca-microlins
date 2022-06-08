<?php
require("conexao.php");
$id = $_POST['id'];
$select = mysqli_query($con,"select * from cliente where id = '".$id."' ") or die(mysqli_error($con));
$sql = mysqli_fetch_assoc($select);

echo "<script>document.getElementById('id_edt_cli').value = '".$sql['id']."';</script>";
echo "<script>document.getElementById('nome_edt_cli').value = '".$sql['nome']."';</script>";
echo "<script>document.getElementById('telefone_edt_cli').value = '".$sql['telefone']."';</script>";
echo "<script>document.getElementById('endereco_edt_cli').value = '".$sql['endereco']."';</script>";
echo "<script>document.getElementById('cidade_edt_cli').value = '".$sql['cidade']."';</script>";
echo "<script>document.getElementById('estado_edt_cli').value = '".$sql['uf']."';</script>";
echo "<script>document.getElementById('email_edt_cli').value = '".$sql['email']."';</script>";

