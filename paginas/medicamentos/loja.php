<?php
include_once '../../paginas/medicamentos/loja.php';
include_once '../../backend/medicamento/RelatorioCompra.php';
?>


<html>
    <head>
        <title>Medicamentos | Medify</title>
        <link rel = "stylesheet " href ="loja.css">
        <link rel = "stylesheet " href ='../../componentes/menu/menu.css'>

    <body>
        <?php
            include_once '../../componentes/menu/menu.php';
        ?>
        
        <section class = "pagina">
            <header>
                <h1> Administração | Medicamentos</h1>
            </header>
            <form class="coisas" action="../../backend/medicamentos/loja.php" method="post">
                <div class = "inputs">
                    <input type="text" name="nome" placeholder="Nome do medicamento">
                    <select name="Controlado">
                        <option> É controlado</option>
                        <option> Sim</option>
                        <option> Não</option>
                    </select>
                </div>
                <div class="inputs">
                    <input type="text" name="Quantia" placeholder="Valor">
                    <select name = "Controlado">
                        <option> Alta vigilância? </option>
                        <option> Sim </option>
                        <option> Não </option>
                    </select>
                </div>
                <div class="inputs">
                    <select name="ativo">
                        <option value="">Ativo</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
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
                        <th>Nome do medicamento</th>
                        <th>Valor</th>
                        <th>Controlado</th>
                        <th>Alta vigilância</th>
                        <th>Ativo</th>
                    </tr>
                    <tr> 
                        <td><button>Excluir</button></td>
                        <td>Histamin</td>
                        <td>R$12,90</td>
                        <td>Não</td>
                        <td>Não</td>
                        <td>Sim</td>
                    </tr>
                    <tr> 
                        <td><button>Excluir</button></td>
                        <td>Merthiolate</td>
                        <td>R$27,55</td>
                        <td>Não</td>
                        <td>Não</td>
                        <td>Sim</td>
                    </tr>
                    <tr> 
                        <td><button>Excluir</button></td>
                        <td>Cimegripe</td>
                        <td>R$12,59</td>
                        <td>Não</td>
                        <td>Não</td>
                        <td>Sim</td>
                    </tr>
                    <tr> 
                        <td><button>Excluir</button></td>
                        <td>Tadalafila</td>
                        <td>R$8,49</td>
                        <td>Não</td>
                        <td>Não</td>
                        <td>Sim</td>
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