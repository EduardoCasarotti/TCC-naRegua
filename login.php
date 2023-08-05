<<?php 
$login = $_POST['login'];
$senha = $_POST['senha'];

//incluido o link para conexao com o banco
include('conexao.php');
// caso conectado ira executar a proxima linha 
$sql = "SELECT * FROM pessoas WHERE pess_email = '$login' AND pess_senha = '$senha'";

$resiltado = mysqli_query($conn, $sql);

if(mysqli_num_rows ($resiltado) > 0 ){
    session_start();
    $_SESSION['login'] = $login;

    header('location:.');//ira apontar para tela de cadastro quando implementado 
}else{
    echo'<script>
    window.alert("Usuario ou senha incorretos")   ;
    location.href="login.html";
    </script>';
}


?>