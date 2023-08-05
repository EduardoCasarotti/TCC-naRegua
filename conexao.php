<<?php 
$host = "10.67.22.216"; // ip do servidor do banco
$usuario = "us_des_222_barbearia"; // nome do usuario do banco 
$senha = "of272"; // senha para entrar no banco
$bancoDeDados = "bd_tcc_des_222_barbearia"; // nome do banco 

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