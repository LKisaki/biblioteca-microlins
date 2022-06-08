<?php
require("acoes/conexao.php");
    $usuario = $_GET['log'];

    
?>    

<html>
    <head>
        <title>SISTEMA PARA GERENCIAMENTO DE BIBLIOTECA</title>
        <link rel="shortcut icon"  href="imagem/microlins-title.jpg"/>
        <meta charset="UTF-8">
        <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link  href="lib/font-awesome/fonts/fontawesome-webfont.ttf"/>
        <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>   
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css"/> 
        <script type="text/javascript" src="lib/jquery/jquery.js"></script>
        <script type="text/javascript" src="lib/bootstrap/js/bootstrap.js"></script> 



        <script>
            $(document).ready(function () {
                var click = false;
                var form_ed_livro = $("#form_livro_modal");
                var form_consultar_livros = $("#form_consultar_livros");
                var form_gravar_livros    = $("#form_livro_modal_cad");
                var form_cad_cli          = $("#form_cad_cli");
                var form_consultar_clientes   = $("#form_consultar_clientes");
                var form_editar_clientes   = $("#form_edt_cli");
                
                
                $("#form_livro_modal_cad").submit(function(){
                    return false;
                });
                $("#form_edt_cli").submit(function(){
                    return false;
                });
                $("#form_consultar_clientes").submit(function(){
                    return false;
                });
                $("#form_livro_modal").submit(function(){
                    return false;
                })
                $("#form_cad_cli").submit(function(){
                    return false;
                })
                $("#m").on("click", function () {
                    if (click == false) {
                        $("#menu-lateral").animate({
                            left: "0%"
                        }, 2000);
                        $(this).removeClass("fa fa-bars");
                        $(this).addClass("fa fa-close");
                        click = true;
                    } else
                    {
                        $("#menu-lateral").animate({
                            left: "-20%"
                        }, 2000);
                        $(this).removeClass("fa fa-close");
                        $(this).addClass("fa fa-bars");
                        click = false;

                    }
                });

                $("#form_consultar_livros").submit(function () {
                    return false;
                });


                $("#btn-pesq-livros").on("click", function () {


                    $("#tit").hide();
                    $.post("acoes/selecionar_livros.php", form_consultar_livros.serialize(), function (data) {
                        $("#listar_livros").html(data);
                    }, "html")

                });
                $("#btn-pesq-clientes").on("click", function () {


                    $("#tit1").hide();
                    $.post("acoes/selecionar_clientes.php", form_consultar_clientes.serialize(), function (data) {
                        $("#listar_clientes").html(data);
                    }, "html")

                });
                $(document).on("click", ".exc-livro", function () {
                    var id = $(this).closest("tr").find(".id").text();
                    if (confirm('Tem certeza que deseja excluir este item ?')) {
                        $.post("acoes/excluir_livros.php", {id: id}, function (data) {
                            $("#listar_livros").html(data);
                        }, "html")
                        $(this).closest("tr").remove();
                    }

                })
                $(document).on("click", ".edt-livros", function () {
                    var id = $(this).closest("tr").find(".id").text();
                    $.post("acoes/consultar_cli_edi.php",{id:id},function(data){$("#men").html(data);},"html");
                    $("#btn").click();
                    //alert('to aqui');
                });

                  $("#deslogar").on("click",function(){
                      if (confirm("Tem certeza que deseja sair do sistema ?")){
                          window.location.href='index.php';
                      }
                  });
                  $("#gravar").on("click",function(){
                              $.post("acoes/inserir_livros.php",form_gravar_livros.serialize(),function(data){$("#men").html(data);},"html");
                  });
                  $(document).on("click", "#btn_cad", function () {
                    //var id = $(this).closest("tr").find(".id").text();
                    $("#titulo").val("");
                    $("#autor").val("");
                    $("#dt_lancamento").val("");
                    $("#sinopse").val("");
                    
                     $("#btn1").click();
                    //alert('to aqui');
                });
                $(document).on("click",".codigo",function(){
                    $("#ordenar").val("id") ;
                    $("#btn-pesq-livros").click();
                    
                });
                $(document).on("click",".titulo",function(){
                    
                    $("#ordenar").val("titulo");
                    $("#btn-pesq-livros").click();
                    
                });
                $(document).on("click",".autor",function(){
                    
                    $("#ordenar").val("autor");
                    $("#btn-pesq-livros").click();
                    
                });
                $(document).on("click",".dt_lancamento",function(){
                    
                    $("#ordenar").val("dt_lancamento");
                    $("#btn-pesq-livros").click();
                    
                });
                $(document).on("click",".sinopse",function(){
                    
                    $("#ordenar").val("sinopse");
                    $("#btn-pesq-livros").click();
                    
                });
                $(document).on("click", "#btn_cad_clientes", function () {
                    $("#btn2").click();
                    //alert('to aqui');
                });
                $(document).on("click", ".edt-clientes", function () {
                    var id = $(this).closest("tr").find(".id").text();
                    $.post("acoes/selecionar_cli_editar.php", {id: id}, function (data) {
                            $("#men").html(data);
                        }, "html")
                    $("#btn3").click();
                    //alert('to aqui');
                });
                $("#btn_salvar_clientes").on("click",function(){
                   $.post("acoes/inserir_clientes.php",form_cad_cli.serialize(),function(data){$("#men").html(data);},"html"); 
                });
                $(document).on("click","#btn-pesq-clientes",function(){
                    
                });
                $(document).on("click", ".exc-clientes", function () {
                    var id = $(this).closest("tr").find(".id").text();
                    if (confirm('Tem certeza que deseja excluir este cliente ?')) {
                        $.post("acoes/excluir_clientes.php", {id: id}, function (data) {
                            $("#listar_clientes").html(data);
                        }, "html")
                        $(this).closest("tr").remove();
                    }

                });
                $("#btn_edt_clientes").on("click",function(){
                   $.post("acoes/alterar_clientes.php",form_editar_clientes.serialize(),function(data){$("#men").html(data);},"html"); 
                });
                /* ORDENAR CLIENTES */
                $(document).on("click",".nome",function(){
                    
                    $("#ordenar").val("nome");
                    $("#btn-pesq-clientes").click();
                    
                });
                $(document).on("click",".endereco",function(){
                    
                    $("#ordenar").val("endereco");
                    $("#btn-pesq-clientes").click();
                    
                });
                $(document).on("click",".cidade",function(){
                    
                    $("#ordenar").val("cidade");
                    $("#btn-pesq-clientes").click();
                    
                });
                $(document).on("click",".telefone",function(){
                    
                    $("#ordenar").val("telefone");
                    $("#btn-pesq-clientes").click();
                    
                });
                $(document).on("click",".email",function(){
                    
                    $("#ordenar").val("email");
                    $("#btn-pesq-clientes").click();
                    
                });
                $(document).on("click",".estado",function(){
                    
                    $("#ordenar").val("uf");
                    $("#btn-pesq-clientes").click();
                    
                });

            });


        </script>




    </head>
    <body>
        <header>
            <span class="pull-left"><i  class="fa fa-bars" id="m"></i> PAINEL DE ADMINISTRAÇÃO DA BIBLIOTECA</span>
            <span class="pull-right"><i class="fa fa-user"></i> Usuario: <?php echo $usuario ?>  <i class="fa fa-power-off" id="deslogar" style="cursor:pointer"> SAIR</i>  </span>
        </header>
        <section>
            <div id="menu-lateral">
                <img src="imagem/microlins.jpg"/>
                <span>MENU</span>
                <hr>
                <ul >
                    <li><i class="fa fa-book"></i><a href="painel.php?pag=cadastro_livros&log=<?php echo $_GET['log'] ?>"> CADASTRO DE LIVROS</a></li>
                    <li><i class="fa fa-money"></i><a href="painel.php?pag=clientes&log=<?php echo $_GET['log'] ?>"> CADASTRO DE CLIENTES</a></li>
                    <li><i class="fa fa-book"></i><a href="painel.php?pag=emprestimos&log=<?php echo $_GET['log'] ?>"> EMPRESTIMOS DE LIVROS</a> </li>
                    <li><i class="fa fa-key"></i> CADASTRO DE USUÁRIO </li>
                </ul>

            </div>

            <?php
            //@$pag = $_GET["pag"];
            @$pag = $_GET["pag"];

            if ($pag == "cadastro_livros")
                include("consultar_livros.php");
            else if ($pag == "clientes")
                include("clientes.php");
            else if ($pag == "emprestimos")
                include("emprestimo_livros.php");
            else
                include("consultar_livros.php");
            ?>

        </section>
        <div id="men"></div>
        <button type="button" style="visibility: hidden" id="btn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>   
        <button type="button" style="visibility: hidden" id="btn1" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Open Modal</button>   
        <button type="button" style="visibility: hidden" id="btn2" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Open Modal</button>   
        <button type="button" style="visibility: hidden" id="btn3" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Open Modal</button>   
       
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">EDITAR LIVROS</h4>
                    </div>
                    <div class="modal-body">
                            <div>
                                <form name="form_livro_modal" id="form_livro_modal">
                                    <label>Titulo</label>
                                    <input type="text" class="input-xlarge" id="titulo_ed_modal" name="titulo_ed_modal"/>
                                    <label>Autor</label>
                                    <input type="text" class="input-xlarge" id="autor_ed_modal" name="autor_ed_modal"/>
                                    <label>Data Lançamento</label>
                                    <input type="date" class="input-xlarge" id="dt_lancamento_ed_modal" name="dt_lancamento_ed_modal"/>
                                    
                                    <label>Sinopse</label>
                                        <textarea rows="15" cols="50" class="input-xlarge" id="sinpose_ed_modal" name="sinopse_ed_modal"></textarea>
                                    </form>

                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" >Salvar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </div>

            </div>
        </div>
                <!-- Cadastro -->
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CADASTRAR LIVROS</h4>
                    </div>
                    <div class="modal-body">
                            <div>
                                <form name="form_livro_modal_cad" id="form_livro_modal_cad">
                                    <label>Titulo</label>
                                    <input type="text" class="input-xlarge" name="titulo" id="titulo"/>
                                    <label>Autor</label>
                                    <input type="text" class="input-xlarge" name="autor" id="autor"/>
                                    <label>Data Lançamento</label>
                                    <input type="date" class="input-xlarge" name="dt_lancamento" id="dt_lancamento"/>
                                    
                                    <label>Sinopse</label>
                                        <textarea rows="15" cols="50" class="input-xlarge" name="sinopse" id="sinopse"></textarea>
                                    </form>

                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="gravar" >Salvar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="fechar">Fechar</button>
                    </div>
                </div>

            </div>
        </div>
                
                <!-- CADASTRO DE CLIENTES -->
        <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CADASTRAR CLIENTES</h4>
                    </div>
                    <div class="modal-body">
                            <div>
                                <form name="form_cad_clil" id="form_cad_cli">
                                    <label>Nome</label>
                                    <input type="text" class="input-xlarge" id="nome_cad_cli" name="nome_cad_cli"/>
                                    <label>Telefone</label>
                                    <input type="text" class="input-xlarge" id="telefone_cad_cli" name="telefone_cad_cli"/>
                                    <label>Endereço</label>
                                    <input type="text" class="input-xlarge" id="endereco_cad_cli" name="endereco_cad_cli"/>
                                    <label>Cidade</label>
                                    <input type="text" class="input-xlarge" id="cidade_cad_cli" name="cidade_cad_cli"/>
                                    <label>Estado</label>
                                    <select name="estado_cad_cli" id="estado_cad_cli">
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
                                    <label>E-mail</label>
                                    <input type="text" class="input-xlarge" id="email_cad_cli" name="email_cad_cli"/>
                                        
                                </form>

                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn_salvar_clientes" >Salvar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="fechar_salvar_clientes">Fechar</button>
                    </div>
                </div>

            </div>
        </div>
                
                    <!-- EDITAR CLIENTES -->
        <div id="myModal3" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">EDITAR CLIENTES</h4>
                    </div>
                    <div class="modal-body">
                            <div>
                                <form name="form_edt_cli" id="form_edt_cli">
                                    <label>Nome</label>
                                    <input type="hidden" class="input-xlarge" id="id_edt_cli" name="id_edt_cli"/>
                                    <input type="text" class="input-xlarge" id="nome_edt_cli" name="nome_edt_cli"/>
                                    <label>Telefone</label>
                                    <input type="text" class="input-xlarge" id="telefone_edt_cli" name="telefone_edt_cli"/>
                                    <label>Endereço</label>
                                    <input type="text" class="input-xlarge" id="endereco_edt_cli" name="endereco_edt_cli"/>
                                    <label>Cidade</label>
                                    <input type="text" class="input-xlarge" id="cidade_edt_cli" name="cidade_edt_cli"/>
                                    <label>Estado</label>
                                    <select name="estado_edt_cli" id="estado_edt_cli">
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
                                    <label>E-mail</label>
                                    <input type="text" class="input-xlarge" id="email_edt_cli" name="email_edt_cli"/>
                                        
                                </form>

                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn_edt_clientes" >Salvar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="fechar_edt_clientes">Fechar</button>
                    </div>
                </div>

            </div>
        </div>
        <footer>
            <label>Desenvolvido por Alunos do Curso de PHP Todos os direitos reservados <i class="fa fa-registered"></i></label>

        </footer>
    </body>




</html>