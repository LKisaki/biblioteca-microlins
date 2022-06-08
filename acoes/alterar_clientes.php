<?php
require("conexao.php");

$update = mysqli_query($con,"update cliente set nome = '".$_POST['nome_edt_cli']."',telefone = '".$_POST['telefone_edt_cli']."',endereco = '".$_POST['endereco_edt_cli']."',cidade = '".$_POST['cidade_edt_cli']."',uf = '".$_POST['estado_edt_cli']."',email = '".$_POST['email_edt_cli']."' where id = '".$_POST['id_edt_cli']."'")or die(mysqli_error($con));
echo "<script>alert('Cliente editado com Sucesso');document.getElementById('fechar_edt_clientes').click();document.getElementById('btn-pesq-clientes').click();</script>";