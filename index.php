<html>
    <head>
        <title>SISTEMA PARA GERENCIAMENTO DE BIBLIOTECA</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon"  href="imagem/microlins-title.jpg"/> <!--  type="image/x-icon -->
        <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="lib/font-awesome/fonts/fontawesome-webfont.ttf"/>
        <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>   
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css"/> 
        <script type="text/javascript" src="lib/jquery/jquery.js"></script>
        <script type="text/javascript" src="lib/bootstrap/js/bootstrap.js"></script> 

        <script>
            $(document).ready(function () {
                   var form_login = $("#log");
                   
                   
                   $("#log").submit(function(){
                       return false;
                   });
                   $("#entrar").on("click",function(){
                       $.post("acoes/logar.php",form_login.serialize(),function(data){$("#mensagem").html(data);},"html");
                   })
                   
            });


        </script>




    </head>
    <body>
        <header>
            <h1>PAINEL DE ADMINISTRAÇÃO DA BIBLIOTECA</h1>
        </header>
        <section>
            <div id="logar-se">
                <form id="log" name="log">
                    <span><i class="fa fa-key"> </i> LOGAR</span>
                    <hr>
                    <label for="login">Login</label>
                            <input type="text" class="input-xlarge" id="login" name="login">
                            <label for="senha">Senha</label>
                            <input type="password" class="input-xlarge" id="senha" name="senha">
                            <button class="btn btn-success"><i class="fa fa-check" id="entrar" > ENTRAR</i></button>
                                    <button class="btn btn-danger" ><i class="fa fa-close" > CANCELAR</i></button>
                                    
                                    </form>

                                    </div>

                                    </section>
                                    <footer>
                                        <label>Desenvolvido por Luan Kisaki. Todos os direitos reservados. <i class="fa fa-registered"></i></label>

                                    </footer>

                                    <div id="mensagem"></div>
                                    </body>



                                    </html>
