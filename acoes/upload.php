<?php
    $pasta = "../img_produto/";
    
    /* formatos de imagem permitidos */
    $permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp");
    
    if(isset($_POST)){
        $nome_imagem    = $_FILES['imagem']['name'];
        $tamanho_imagem = $_FILES['imagem']['size'];
        
        /* pega a extensão do arquivo */
        $ext = strtolower(strrchr($nome_imagem,"."));
        
        /*  verifica se a extensão está entre as extensões permitidas */
        if(in_array($ext,$permitidos)){
            
            /* converte o tamanho para KB */
            $tamanho = round($tamanho_imagem / 1024);
            
            if($tamanho < 6144){ //se imagem for até 1MB envia
                $nome_atual = $nome_imagem; //nome que dará a imagem
                $tmp = $_FILES['imagem']['tmp_name']; //caminho temporário da imagem
                
                /* se enviar a foto, insere o nome da foto no banco de dados */
                if(move_uploaded_file($tmp,$pasta.$nome_atual)){
                     echo "<img src='produtos/".$nome_atual."' id='previsualizar'>"; //imprime a foto na tela
                }else{
                    echo "Falha ao enviar";
                }
            }else{
                echo "A imagem deve ser de no máximo 1MB";
            }
        }else{
            echo "Somente são aceitos arquivos do tipo Imagem";
        }
    }else{
        echo "Selecione uma imagem";
        exit;
    }
   
?>