<?php
include_once '../../paginas/Vendas/venda.php';
?>


<html>
    <head>
        
        <link rel = "stylesheet " href ="venda.css">
        <link rel = "stylesheet " href ='../../componentes/menu/menu.css'>

    <body>
        <head> 
            <title>Venda | Medify </title>
        </head>
        
        <?php
            include_once '../../componentes/menu/menu.php';
        ?>

        <section class = "pagina">
            <header>    
                <h1> Movimentação | Venda</h1>
            </header>
            <form class="coisas" action="../../backend/Venda/venda.php" method="post">
                <div class = "inputs">
                    <input type="text" name="nome" placeholder="Método de pagamento">
                    <input type="text" name="client" placeholder="Cliente">
                </div>
                <div class="inputs">
                    <input type="text" name="Venda" placeholder="Data da venda">
                    <input type="text" name="Data de pagamento" placeholder="Data de pagamento">
                </div>
                <div class="inputs">
                    <select name="selecao">
                        <option value="">Tipo</option>
                        <option value="300">Pessoa física</option>
                        <option value="">Pessoa jurídica</option>
                    </select>
                    <select name="selecao">
                        <option value="">Situação</option>
                        <option value="300">Pendente</option>
                        <option value="">Pago</option>
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
                        <th>Data de venda</th>
                        <th>Tipo</th>
                        <th>Método de pagamento</th>
                        <th>Data de pagamento</th>
                        <th>Cliente</th>
                        <th>Situação</th>
                    </tr>
                    <tr> 
                        <td><button>Excluir</button></td>
                        <td>20/04/2023</td>
                        <td>Pessoa física</td>
                        <td>Crédito</td>
                        <td>04/08/2024</td>
                        <td>Pavê</td>
                        <td>Pendente</td>
                    </tr>
                    <?php

                    //Para iterar entre os itens do array
                    //que é o nosso $relatorio

                    /*    foreach($relatorio as $usuario){
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