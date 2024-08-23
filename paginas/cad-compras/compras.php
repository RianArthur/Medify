<?php
include_once '../../paginas/cad-compras/compras.php';
?>


<html>
    <head>
        <title>Medify Compras</title>
        <link rel = "stylesheet " href ="compras.css">
    </head>

    <body>
        <?php
            include_once '../../componentes/menu/menu.php';
        ?>
        
        <section class = "pagina">
            <header>
                <h1> Administração | compras</h1>
            </header>
            <form class="coisas" action="../../backend/usuario/compras.php" method="post">
                <div class = "inputs">
                    <input type="text" name="nome" placeholder="Nome do medicamento">
                    <input type="text" name="ordem" placeholder="Ordem de compra">
                </div>
                <div class="inputs">
                    <input type="text" name="Venda" placeholder="Data">
                    <input type="text" name="Quantidade" placeholder="Quantidade">
                </div>
                <div class="inputs">
                    <select name="selecao">
                        <option value="">Ativo</option>
                        <option value="300">Sim</option>
                        <option value="">Não</option>
                    </select>
                </div>
                <div class = "controles">
                    <button type="submit" class="salvar">Salvar</button>
                    <button type="reset" class ="cancelar">Cancelar</button>
                    <?php
                        echo("");
                    ?>
                </div>
            </form>
            <div class ="relatorio">
                <h1>Relatório</h1>
                <table>
                    <tr>
                        <th>Ação</th>
                        <th>Quantidade</th>
                        <th>Ordem de compra</th>
                        <th>Venda</th>
                        <th>Cliente</th>
                        <th>Situação</th>
                    </tr>
                    <tr> 
                        <td><button>Excluir</button></td>
                        <td>1</td>
                        <td>Tio do Pavê</td>
                        <td>7070-7070</td>
                        <td>pave_pacume</td>
                        <td>Piadista</td>
                    </tr>
                    <?php

                    //Para iterar entre os itens do array
                    //que é o nosso $relatorio

                    /*  foreach($relatorio as $usuario){
                        echo("
                            <tr>
                                <td><button>Excluir</button></td>
                                <td>".$usuario['id']."</td>
                                <td>".$usuario['nome']." ".$usuario['sobrenome']."</td>
                                <td>".$usuario['telefone']."</td>
                                <td>".$usuario['login']."</td>
                                <td>".$usuario['descricao']."</td>
                            </tr>
                        ");
                    }
                        */
                    ?>
                </table>
            </div>
        </section>
    </body>
</html>