<?php

$erro = null;

if($_GET){
    if($_GET['erro']){
      $erro = $_GET['erro'];

    }
}

?>

<html>
  <head>
    <title>Login | MEDIFY</title>
    <link rel="stylesheet" href="style medify beta2.css">
    <meta charset="utf-8">
  </head>
  <body>
    <section class="container">
      <form action="backend/login/login.php" method="post">
        <div class="sobre_figura">
          <img src="assets/img/steve_picareta-removebg-preview.png">
        </div>
        <div>
          <article>
            <h1>Medify</h1>
            <input type="text" placeholder="Digite seu E-mail ou nome de usuário" name="usuario">
            <input type="password" placeholder="Digite sua senha" name="senha">
            <a href="Link do esqueceu senha">Esqueceu a senha?</a>
            <button type="submit" class="bt1">Entrar</button>
            <button class="bt2">Criar uma conta</button>
          </article>
        </div>
      </form>
      <?php

      if($erro !=null){
        switch($erro){
          case '401':
            echo("<p class =\"erro\">Usuário ou senha inválida</p>");
            break;
          case '500':
            echo("<p class =\"erro\">Erro no servidor, tente novamente mais tarde</p>");
            break;
        }
      }

      ?>
    </section>
</body>
</html>