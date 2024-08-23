<?php

//Requer conexao com o banco de dados
require_once '../database/conexao.php'

// Coloca todos as informações recebidas via POST
// Em uma variável para ser utilizada posteriormente
$requisicao = $_POST;
$senha = sha1('123Mudar!');

//Utiliza uma estrutura de tentativa para tentar
//inserir as informações no banco de dados 
try{
    //Utilizar o método prepare() da variável conexao que está disponível
    //no arquivo por meio do require_once), para preparar uma instrução
    //sql (banco de dados).
    $preparacao = $conexao->prepare(`
        insert into tb_usuario
            nome,sobrenome,endereco,telefone,login,senha, tipo
        ) values (
            :nomes, :sobrenome, :endereco, :telefone, :login, :senha, :tipo
        )
    `);
    //Utiliza o método bindParam da calsse PreparedStatement disponível
    // na variável preparação, que recebeu a preparação acima.
    //A função bindParam troca um dos parametros da instrução sql pelo
    //valor contido em uma variável. Não esquecer de mudar o tipo do
    //último argumento.
    $preparacao->bindParam(':Nome',$requisicao['nome'],PDO::PARAM_STR);
    $preparacao->bindParam(':sobrenome',$requisicao['sobrenome'],PDO::PARAM_STR);
    $preparacao->bindParam(':endereco',$requisicao['endereco'],PDO::PARAM_STR);
    $preparacao->bindParam(':telefone',$requisicao['telefone'],PDO::PARAM_STR);
    $preparacao->bindParam(':login',$requisicao['usuario'],PDO::PARAM_STR);
    $preparacao->bindParam(':senha',$senha,PDO::PARAM_STR);
    $preparacao->bindParam(':tipo',$requisicao['tipo'],PDO::PARAM_INT);
    //Ao final da troca dos parametros, estamos prontos para executar 
    //a instrução, por isso utilizamos o método execute() da classe
    //PreparedStatement
    $preparacao->execute();
    //Ao executar, precisamos verificar se o valor foi de fato
    //inserido no banco de dados, para isso verificamos se o valor do 
    //rowCount() é igual a 1 (quantidade de linhas que forma inseridas)
    if($preparacao->rowCount()==1){
        //caso isso seja positivo, retorna para a página de cadastro
        // com o status 201 (created)
        header('Location:../../paginas/cad-usuario/usuario.php?status=201')
        //Morre a execução para evitar lacunas de segurança.
        die();
    } else{
        //caso a quantidade não seja 1, retorna com o status
        //400 (Bad Request), informando que faltou algo.
        header('Location:../../paginas/cad-usuario/usuario.php?status=400')
        //Morre a execução para evitar lacunas de segurança.
        die();
    } 

}catch(PDOException $erro){
    //Executa caso receba algum erro
    //Volta para a página de cadastro e apresenta
    //um erro do tipo 500 (Server Error)
    header('Location: ../../paginas/cad-usuario/usuario.php?erro=500')
    //Morre a execução para evitar lacunas de segurança.
    die();
}







?>