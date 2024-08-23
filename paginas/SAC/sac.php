<?php
    include_once '../../paginas/SAC/sac.php';
?>

<html>
    <head>
        <title>Sac | Medify</title>
        <link rel = "stylesheet " href ="sac.css">
        <link rel = "stylesheet " href ='../../componentes/menu/menu.css'>
    <body>
        <?php
            include_once '../../componentes/menu/menu.php';
        ?>
         <section class = "pagina">
            <header>
                <h1>SAC - Serviço de Atendimento ao Cliente</h1>
            </header>
            <form class="coisas" action="../../backend/medicamentos/loja.php" method="post">
                <div class = "inputs">
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                    <textarea placeholder="Digite sua pergunta" class="grande"></textarea>
            </form>
                <button class="enviar">Enviar</button>
        </section>
    </body>
</html>