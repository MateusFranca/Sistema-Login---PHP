<?php
// Conexão com o banco de dados
$host = "localhost";
$db_user = "root";
$db_password = "23021308";
$db_name = "atividade";

$conn = new mysqli($host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar se o usuário existe no banco de dados
$sql = "SELECT * FROM usuarios WHERE user_usu = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password_usu'];
    
    // Verificar se a senha está correta
    if (password_verify($password, $hashed_password)) {
        // Iniciar a sessão
        session_start();
        
        // Armazenar o ID do usuário na sessão
        $_SESSION['user_id'] = $row['id'];
        
        // Redirecionar para a página de logoff
        header("Location: loginsucesso.php");
        exit();
    } else {
        echo "<script>alert('Senha incorreta.'); window.location.href = 'login.php';</script>";
    }
} else {
    echo "<script>alert('Usuário não encontrado.'); window.location.href = 'login.php';</script>";
}

$conn->close();
?>
