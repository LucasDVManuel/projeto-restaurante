<?php
// Conexão com o banco de dados (substitua pelos seus valores)
$host = 'localhost';
$db_user = 'root';
$db_password = 'Mysql@2023';
$db_name = 'restaurante';

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter os dados do formulário de cadastro
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$novo_valor = md5($senha);
$ativo = isset($_POST['amd']) ? $_POST['amd'] : 'N'; // Se o checkbox não estiver marcado, define o valor para '0'
$ativo = isset($_POST['ativo']) ? $_POST['ativo'] : 'N';

// Consulta SQL para inserir o novo usuário na tabela
$sql = "INSERT INTO usuario (nome, usuario, senha, adm, ativo)
        VALUES ('$nome', '$usuario', '$novo_valor', '$adm', '$ativo')";

if ($conn->query($sql) === TRUE) {
    echo "Novo usuário cadastrado com sucesso!";
    header("Location: http://localhost/projeto-restaurante/login.php");
} else {
    echo "Erro ao cadastrar o usuário: " . $conn->error;
}

$conn->close();
?>