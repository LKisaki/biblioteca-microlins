<div id="consultar_livros">
    <form class="form form-inline" id="form_consultar_livros">
        <label>Titulo</label>
        <input type="text" class="input-xlarge" id="titulo" name="titulo"/>
        <label>Autor</label>
        <input type="text" id="autor" class="input-xlarge" name="autor"/>
        <label>Inicial</label>
        <input type="date" id="dt_ini" class="input-xlarge" name="dt_ini"/>
        <label>Final</label>
        <input type="date" id="dt_fim" class="input-xlarge" name="dt_fim"/>
        <input type="hidden" id="ordenar" class="input-xlarge" name="ordenar" value="id"/>
        
        <button class="btn btn-info" id="btn-pesq-livros"><i class="fa fa-search"></i></button>
        <button class="btn btn-success" id="btn_cad"><i class="fa fa-plus"></i></button>

                        </form>
    <table class="table table-striped" style="width: 100%;" id="tit">
                            <thead>
                            <th>CODIGO</th>
                            <th>TITULO</th>
                            <th>AUTOR</th>
                            <th>DATA DE LANÇAMENTO</th>
                            <th>SINOPSE</th>
                            <th>QTD</th>
                            <th>AÇÕES</th>

                            </thead>
                        </table>
                        <div id="listar_livros">
                        </div>


                        </div>