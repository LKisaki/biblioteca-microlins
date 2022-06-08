<?php
require("conexao.php");

$sql = " ";

if (!empty($_POST['nome']))
    $sql = $sql." and nome like '%".$_POST['nome']."%' " ;

if (!empty($_POST['endereco']))
    $sql = $sql." and endereco like '%".$_POST['endereco']."%' ";

if (!empty($_POST['cidade']))
    $sql = $sql." and cidade like '%".$_POST['cidade']."%' ";

if (!empty($_POST['estado']))
    $sql = $sql." and uf = '".$_POST['estado']."' ";

$order = $_POST['ordenar'];
$select = mysqli_query($con,"select * from cliente where id > 0 $sql order by $order  ") or die(mysqli_error($con));
?>
<table class="table table-striped" style="width: 100%;">
    <tr>
    <th class="id">ID</th>
    <th class="nome">NOME</th>
    <th class="endereco">ENDEREÇO</th>
    <th class="cidade">CIDADE</th>
    <th class="telefone">TELEFONE</th>
    <th class="email">EMAIL</th>
    <th class="estado">ESTADO</th>
    <th>AÇÕES</th>
       
    </tr>
    <tbody>
<?php 
while ($sql = mysqli_fetch_assoc($select)){
    
    
    echo "<tr>";
    echo "<td class='id'>".$sql['id']."</td>";
    echo "<td>".$sql['nome']."</td>";
    echo "<td>".$sql['endereco']."</td>";
    echo "<td>".$sql['cidade']."</td>";
    echo "<td>".$sql['telefone']."</td>";
    echo "<td>".$sql['email']."</td>";
    echo "<td>".$sql['uf']."</td>";
    echo "<td><button class='btn btn-warning edt-clientes'><i class='fa fa-edit'></i></button><button class='btn btn-danger exc-clientes'><i class='fa fa-trash'></i></button></td>";
    echo "</tr>";    
    
}
?>
    </tbody>
</table>