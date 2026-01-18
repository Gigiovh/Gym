<?php
$server = "localhost";
$user = "root";
$senha="";
$bancoDados="cadastro";

$conexao = new mysqli($server,$user,$senha,$bancoDados);

if($conexao->connect_error){
    die("Falha na conexão" .$conexao->connect_error);
    
}
?>
