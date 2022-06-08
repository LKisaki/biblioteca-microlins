<?php
require("conexao.php");

$inserir = mysqli_query($con,"insert into livros (titulo,autor,dt_lancamento,sinopse,img_livro,qtd) Values ('".$_POST['titulo']."','".$_POST['autor']."','".$_POST['dt_lancamento']."','".$_POST['sinopse']."','','1')")or die (mysqli_error($con));
echo "<script>alert('Cadastrado com sucesso '); document.getElementById('fechar').click(); document.getElementById('btn-pesq-livros').click(); </script>";