<?php 

    $id = $_GET ['codigo'];

//iNCLUINDO O ARQUIVO DE CONEXÃO 
include 'conexao.php';

// INSTRÇÃO DE SELECT PARA CAPTURAR USUAREIO DIGITADO NA TELA DE LOGIN 
$select = "SELECT * FROM tb_user WHERE id_user = $id";

// FUNÇÃO QUERY EXECUTA O SELECT DENTRO DO BANCO  
$query = $conexao->query($select);

// FUNÇÃO FETCH_ASSOC ARMAZENA O RESULTADO DA VARIAVEL  
$resultado = $query->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="tb-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">

</head>
<body>
  <div class="container">
    <aside>
        <img src="images/carro.jpg" alt="meu" width=500>
    </aside>

    <form action="#" method="post"> 
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" id="Nome">

        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email">

        <label for="Setor">Setor</label>
        <input type="text" name="Setor" id="Setor">

        <label for="Senha">Senha</label>
        <input type="text" name="Senha" id="Senha">

        <div class="butao">
        <button type="submit"> Cadastrar </button>
        <a href="index.html">Voltar</a>
        </div>
    </form>
</div>

</body>
</html>