<?php

include 'conexao.php';

//trazendo os dados do formulario

$nome = $_POST['Nome'];
$email = $_POST['Email'];
$setor = $_POST['Setor'];
$senha = $_POST['Senha'];
    

$sql = "INSERT INTO `tb_user` VALUES (NULL, '$nome', '$email', '$setor', '$senha');";

if ($conexao->query($sql) === TRUE) {
  echo "<script>alert('Usuario cadastrado com sucesso'); history.back() </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>