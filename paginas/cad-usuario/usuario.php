<?php
//Inclui o relatório de usuário
include_once '../../backend/usuario/relatorioUsuario.php';


//Inicializa uma variável com nome de mensagem com o valor null
$mensagem = null;
//Verifica se recebeu alguma informação por meio de GET
if($_GET){
    //Verifica se essa informação é um status
    if($_GET['status']){
        //utiliza a estrutura de decisão switch para verificar qual
        //status foi recebido e atribuir uma mensagem conforme necessário
        switch($_GET['status']){
            case 201:
                //criado
                $mensagem = 'Adicionado com sucesso!';
                break;
            case 400:
                //Bad Request
                $mensagem = 'Inserção não funcionou';
                break;
            case 500:
                //Erro no servidor
                $mensagem = 'Erro ao tentar inserir informações';
                break;
        }
    }
}

?>
<html>
    <head>
        <title>Usuário | Medify</title>
        <link rel = "stylesheet " href ="usuario.css">
        <link rel = "stylesheet " href ='../../componentes/menu/menu.css'>
    </head>
    <body>
        <?php
            include_once '../../componentes/menu/menu.php';
        ?>
        <section class = "pagina">
            <header>
                <h1> Administração | Cadastro de usuários</h1>
            </header>
            <form class="coisas" action="../../backend/usuario/CriarUsuario.php" method="post">
                <div class = "inputs">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="sobrenome" placeholder="Sobrenome">
                </div>
                <div class="inputs">
                    <input type="text" name="telefone" placeholder="Telefone">
                    <input type="text" name="Endereco" placeholder="Endereço">
                </div>
                <div class="inputs">
                    <input type="text" name="usuario" placeholder="Usuário">
                    <select name="selecao">
                        <option value="">Tipo de usuário</option>
                        <option value="300">Administrador</option>
                        <option value="">Normal</option>
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
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Login</th>
                        <th>Cargo</th>
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

                    foreach($relatorio as $usuario){
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

                    ?>
                </table>
            </div>
        </section>
    </body>
</html>