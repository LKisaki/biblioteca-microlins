<div id="clientes">

    <form class="form form-inline" id="form_consultar_clientes">
        <label>Nome</label>
        <input type="text" class="input-xlarge" id="nome" name="nome"/>
        <label>Endereço</label>
        <input type="text" id="endereco" class="input-xlarge" name="endereco"/>
        <label>Cidade</label>
        <input type="text" id="cidade" class="input-xlarge" name="cidade"/>
        <label>Estado</label>
        <select name="estado" id="estado">
            <option value="">TODOS</option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                        
                                    </select>
        <input type="hidden" id="ordenar" class="input-xlarge" name="ordenar" value="id"/>

        <button class="btn btn-info" id="btn-pesq-clientes"><i class="fa fa-search"></i></button>
        <button class="btn btn-success" id="btn_cad_clientes"><i class="fa fa-plus"></i></button>

    </form>
    <table class="table table-striped" style="width: 100%;" id="tit1">
        <thead>
            <tr>
                <th class="id">ID</th>
                <th class="nome">NOME</th>
                <th class="endereco">ENDEREÇO</th>
                <th class="cidade">CIDADE</th>
                <th class="telefone">TELEFONE</th>
                <th class="email">EMAIL</th>
                <th class="estado">ESTADO</th>
                <th>AÇÕES</th>

        </thead>
    </table>
    <div id="listar_clientes">
    </div>


</div>
