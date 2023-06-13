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

// Criptografar a senha
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Inserir usuário no banco de dados
$sql = "INSERT INTO usuarios (user_usu, password_usu) VALUES ('$username', '$hashed_password')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Usuário cadastrado com sucesso!'); window.location='cadastro_usuario.php';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar o usuário: " . $conn->error . "'); window.location='cadastro_usuario.php';</script>";
}

$conn->close();
?>
