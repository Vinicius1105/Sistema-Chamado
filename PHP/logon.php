<?php
//receber os da tela de logins 
$email = $_POST['email'];
$senha = $_POST ['SENHA'];

//iNCLUINDO O ARQUIVO DE CONEXÃO 
include 'conexao.php';

// INSTRÇÃO DE SELECT PARA CAPTURAR USUAREIO DIGITADO NA TELA DE LOGIN 
$select = "SELECT * FROM tb_user WHERE email = $emai";

// FUNÇÃO QUERY EXECUTA O SELECT DENTRO DO BANCO  
$query = $conexao->query($select);

// FUNÇÃO FETCH_ASSOC ARMAZENA O RESULTADO DA VARIAVEL  
$resultado = $query->fetch_assoc();

var_dump($resultado);

//
$email_banco = $resultado ['email'];
$senha_banco = $resultado ['senha'];

if ($senha == $email_banco && $senha == $senha_banco) {
header('location: ../home.html');   
} 

else {
    echo "<script>alert('Usuario ou Senha incorreta'); history.back() </script>";
}

?>