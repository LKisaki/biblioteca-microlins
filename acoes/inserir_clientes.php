<?php
require("conexao.php");

$inserir = mysqli_query($con,"insert into cliente (nome,telefone,endereco,cidade,uf,email) Values ('".$_POST['nome_cad_cli']."','".$_POST['telefone_cad_cli']."','".$_POST['endereco_cad_cli']."','".$_POST['cidade_cad_cli']."','".$_POST['estado_cad_cli']."','".$_POST['email_cad_cli']."') ")or die(mysqli_error($con));
echo "<script>alert('Registro Inserido com sucesso');document.getElementById('fechar_salvar_clientes').click();document.getElementById('btn-pesq-clientes').click();</script>";