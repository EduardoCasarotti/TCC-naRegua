<<?php 
$host = "127.0.0.1"; // ip do servidor do banco
$usuario = "root"; // nome do usuario do banco 
$senha = ""; // senha para entrar no banco
$bancoDeDados = "s222_eduardo_teste"; // nome do banco 

// criando uma conexao com o banco de dados Mysql

$conn = @mysqli_connect($host, $usuario, $senha, $bancoDeDados);

//verificação de conexao OK
if ($conn){
    $banco = @mysqli_select_db($conn, $bancoDeDados);
    printf("Conectado ao baco de dados");
}else{
    printf("Erro de conexao");
}

?>