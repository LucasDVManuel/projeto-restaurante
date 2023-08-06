<?php
session_start(); // Iniciar a sessão

// Verificar se o usuário está logado (se a sessão está definida)

if (isset($_SESSION["nome_usuario"])) {
    $nome_usuario = $_SESSION["nome_usuario"];
    
    // Agora você pode mostrar o nome do usuário na página nova_pagina.php
} else {
    // Se o usuário não estiver logado, redirecionar novamente para o formulário de login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tela Principal</title>
</head>
<body>
    <h2>Voce esta Logado <?php echo $nome_usuario; ?></h2>

    <!-- Menu com a opção "Cadastro de Usuário" -->
    <ul>
    <?php if (isset($_SESSION['usuario_adm']) && $_SESSION['usuario_adm']) : ?>
        <li><a href="cadastrousuario.php">Cadastro de Usuário</a></li>
        <li><a href="cadastraprato.php">Cadastro de Prato</a></li>
        <li><a href="VerPedido.php">Ver Pedidos</a></li>
    <?php else: ?>    
        <li><a href="FazerPedido.php">Fazer Pedidos</a></li>
        <li><a href="VerNotificacoes.php">Fazer Pedidos</a></li>
    <?php endif; ?>    
        <!-- Outras opções do menu podem ser adicionadas aqui -->
    </ul>
</body>
</html>