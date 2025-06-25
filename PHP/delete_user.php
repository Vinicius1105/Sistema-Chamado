<?php 
if (isset($_POST['confirmar'])) {
    include 'conexao.php';
    $id = $_GET ['codigo'];
    $deletar = "DELETE FROM tb_user WHERE id_user = $id"; 
    $query = $conexao->query($deletar);
    if ($query ) { 
        echo "<p>". "Usuário deletado com sucesso!"."</p>";
        echo "<p>". "Para voltar a lista de usuário" ."</p>" ."<a href='listar_usuario'>"."Clique Aqui"."</a>";
        die();
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfirmação</title>
</head>
<body>
    <h1>Deseja realmente excluir este usuário?</h1>
    <form action="#" method="post">
        <div class="escolha">
            <button type="submit" name="confirmar">Sim</button>
            <a href="listar_usuario.php">Não</a>
        </div>
    </form>
</body>
</html>