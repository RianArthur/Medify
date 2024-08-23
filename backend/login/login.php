<?php

require_once '../database/conexao.php';

$usuario = $_POST["usuario"];
$senha = sha1 ($_POST["senha"]);

echo("O nome de usuário é: ".$usuario);
echo("E a senha é: ".$senha);

try{
    $estagio = $conexao->prepare('select id from tb_usuario where login = :usuario and senha = :senha');
    $estagio->bindParam(':usuario',$usuario,PDO::PARAM_STR);
    $estagio->bindParam(':senha',$senha,PDO::PARAM_STR);
    $estagio->execute();
    $resultado = $estagio->fetchAll();
    print_r($resultado);
    if(count($resultado)==1){
        // o usuário pode logar no sistema
        header('Location: ../../paginas/home/home.php');
        die();
    }else{
        // não autenticado
        header('Location: ../../index.html?erro=401');
        die();
    }

}catch(PDOException $erro){
    echo('Erro: '.$erro->getMessage());
    // retorna o erro
    header('Location: ../../index.php?erro=500');
        die();
}

?>