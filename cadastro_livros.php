<div id="cadastro_livro">
<div id="form">
<table>
	<form name="form_livro" id="form_livro">
	<tr>
	<td>
		<label>Titulo</label>
		<input type="text" class="input-xlarge"/>
		</td>
		<td>
		<label>Autor</label>
		<input type="text" class="input-xlarge"/>
		</td>
		</tr>
		<tr>
		<td colspan="2">
		 <form id="formulario" method="post" enctype="multipart/form-data" action="acoes/upload.php">
Foto
<input type="file" id="imagem" name="imagem" />
</form>
		</td>
		</td>
		<tr>
		<td colspan="2">
		<label>Sinopse</label>
		<textarea rows="15" cols="50" class="input-xlarge"></textarea>
		<td>
		</tr>
		<tr>
		<td><button class="btn btn-success">Cadastrar</button></td>
		<td><button class="btn btn-danger">Cancelar</button></td>
		<tr>
	
	</form>
	</table>
	
	</div>
	
	<div id="preview">
		<label>Visualização da Imagem a ser Carregada</label>
	
	</div>
	
	

</div>