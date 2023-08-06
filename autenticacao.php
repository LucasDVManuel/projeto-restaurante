<?php
// Conexão com o banco de dados (substitua os valores pelas suas credenciais)
$host = 'localhost';
$db_user = 'root';
$db_password = 'Mysql@2023';
$db_name = 'restaurante';

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter as credenciais do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$novo_valor = md5($senha);

// Consulta SQL para verificar o usuário no banco de dados
$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$novo_valor'";
$result = $conn->query($sql);

if($result !== false){
    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $userADM = $row['adm'];
        

        // O usuário e senha estão corretos
        echo "Login bem-sucedido! Bem-vindo, " . $usuario;
        session_start();
        $_SESSION["nome_usuario"] = $usuario;

        if ($userADM == 'S') {
            $_SESSION["usuario_adm"] = true;
        }else{
            $_SESSION["usuario_adm"] = false;
        }

        
        print $usuario;
        header("Location: http://localhost/projeto-restaurante/index.php");
        exit();
    } else {
        // Credenciais inválidas
        echo "Usuário ou senha incorretos. Por favor, tente novamente.";
    }
}else{
    // sem registros no banco
    echo "Não foi possivel logar no sistema, entre em contato com o Administrador";
}
$conn->close();
?>