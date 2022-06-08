<?php
require("conexao.php");
$login =  $_POST['login'];
$senha =  $_POST['senha'];

$sql = mysqli_query($con,"select * from login where login = '".$login."' and senha = '".$senha."' ") or die (mysqli_error($con));
$qtd = mysqli_num_rows($sql);
if ($qtd > 0){
    $log = mysqli_fetch_assoc($sql);
    $usuario = $log['login'];
    echo "<script>alert('SEJA BEM VINDO (A) $usuario '); window.location.href='painel.php?log=$usuario'</script>";
    
}
else{
    echo "<script>alert('LOGIN OU SENHA INCORRETOS')</script>";
    
}

        

        
