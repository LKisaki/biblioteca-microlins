# biblioteca-microlins
<h3>Site feito com a proposta de apresentar um sistema de biblioteca para a microlins de Aracaju desenvolvido em 2016.</h3> 

<img src="https://user-images.githubusercontent.com/95627229/172688492-b8880076-f0fe-4cd7-b0f3-42335510bc38.png">
<img src="https://user-images.githubusercontent.com/95627229/172687939-a8046edd-8df9-47e0-b5bf-594311ae20ca.png">
<img src="https://user-images.githubusercontent.com/95627229/172688812-edc0f60a-3bab-4d58-9a82-9401932c47e0.png">
<img src="https://user-images.githubusercontent.com/95627229/172689077-832830cd-c7bf-4448-b3bf-53ab6e8754f7.png">

Para executá-lo, será nescessário a instalação de um Apache, Php, e um banco de dados.
Você pode testar e avaliar utilizando um sistema que já faz todas essas instalações em um unico sistema.

Nesse projeto, quando foi desenvolvido, foi instalado o <a href="https://www.apachefriends.org/download.html" target="blank">xampp</a>, você pode baixar clicando no nome do sistema ou <a href="https://www.apachefriends.org/download.html" target="blank">aqui</a>.

Após baixar, se o seu xampp já estiver instalado e em execução (pelo menos o Apache e MySql "startado") no seu navegador, digite o caminho " <strong><i>localhost/phpmyadmin</i></strong> " ou <a href="localhost/phpmyadmin" target="blank">clique aqui</a>.

  Se não, instale o xampp e execute, na tela de controle do sistema clique em "start" para iniciar o Apache e o MySql.!
  
  <img src="https://user-images.githubusercontent.com/95627229/172661466-c80fc745-9376-40bc-a276-410ba4a0356b.png">
  
  <strong><i>ps: Se a sua Port(s) não estiver configurada para "80", será necessario selecionar a porta no seu navegador. ex: http://localhost:3838/</i></strong>

<img src="https://user-images.githubusercontent.com/95627229/172663044-80cd6623-ed61-4f42-8c3f-e9da0b9484bf.png">

Para acessar o sistema, será  necessário <strong>importar o backup</strong> já publicado <a href="https://github.com/LKisaki/biblioteca-microlins/blob/main/backup_biblioteca.sql" target="blank">aqui</a> no projeto.

  Para importar o banco:
<ul>
  <li>entre no gerenciador do deu banco de dados (localhost/phpmyadmin, se sua porta for diferente de 80, localhost:<strong>numerodaporta</strong>/phpmyadmin );</li>
  <li>crie uma nova tabela com o nome "biblioteca";</li>
  <li>clique na aba "<img src="https://user-images.githubusercontent.com/95627229/172683637-ccc934ce-6447-4c1e-b8e2-b225e6743f4b.png">";</li>
  <li>clique em <strong>"escolher arquivo"</strong> e execute.</li>
 </ul>
 
 Para acessar o sistema digite no nome de usuário "LUAN" e a senha "KISAKI".
 
 <strong>ps: Esse código foi um protótipo feito em 2016 a mercer de aprovação. Alguns bug e práticas amadoras, tanto no back como no front, serão encontradas.</strong>

E é isso! ;)
