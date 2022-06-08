<?php
require("conexao.php");

$sql = " ";

if (!empty($_POST['titulo']))
    $sql = $sql." and titulo like '%".$_POST['titulo']."%' " ;

if (!empty($_POST['autor']))
    $sql = $sql." and autor like '%".$_POST['autor']."%' ";


if ((!empty($_POST['dt_ini'])) && (!empty($_POST['dt_fim'])))
    $sql = $sql." and dt_lancamento between '".$_POST['dt_ini']."' and '".$_POST['dt_fim']."'  ";

$order = $_POST['ordenar'];
$select = mysqli_query($con,"select * from livros where id > 0 $sql order by $order  ") or die(mysqli_error($con));
?>
<table class="table table-striped" style="width: 100%;">
    <tbody>
    <th class="codigo">CODIGO</th>
    <th class="titulo">TITULO</th>
    <th class="autor">AUTOR</th>
    <th class="dt_lancamento">DATA DE LANÇAMENTO</th>
    <th class="sinpose">SINOPSE</th>
    <th class="qtd">QTD</th>
    <th>AÇÕES</th>
           <tbody>
<?php 
while ($sql = mysqli_fetch_assoc($select)){
    $d = explode("-",$sql['dt_lancamento']);
    $data = $d[2]."/".$d[1]."/".$d[0];
    
    echo "<tr>";
    echo "<td class='id'>".$sql['id']."</td>";
    echo "<td>".$sql['titulo']."</td>";
    echo "<td>".$sql['autor']."</td>";
    echo "<td>".$data."</td>";
    echo "<td>".$sql['sinopse']."</td>";
    echo "<td>".$sql['qtd']."</td>";
    echo "<td><button class='btn btn-warning edt-livros'><i class='fa fa-edit'></i></button><button class='btn btn-danger exc-livro'><i class='fa fa-trash'></i></button></td>";
    echo "</tr>";    
    
}
?>
    </tbody>
</table>

    
    