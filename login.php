<?php
//incluido o link para conexao com o banco
include('conexao.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

// caso conectado ira executar a proxima linha 
$sql = "SELECT * FROM pessoas WHERE pess_email = '$login' AND pess_senha = '$senha'";

$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows ($resultado) > 0 ){
    session_start();
    $_SESSION['login'] = $login;

    header('location:http://etectupa.com.br');//ira apontar para tela de cadastro quando implementado 
}else{
    echo'<script>
    window.alert("Usuario ou senha incorretos")   ;
    location.href="login.html";
    </script>';
}


?>