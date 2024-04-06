<?php
// login.php
header('Content-Type: application/json');

// Inclui o arquivo de usuários.
$usuarios = include('usuarios.php');

// Verifica se os dados de login foram enviados.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Verifica se o usuário existe e a senha está correta.
    if (isset($usuarios[$usuario]) && password_verify($senha, $usuarios[$usuario])) {
        // Responde com sucesso.
        $resposta = ['sucesso' => true, 'mensagem' => 'Login bem-sucedido!'];
    } else {
        // Responde com falha.
        $resposta = ['sucesso' => false, 'mensagem' => 'Usuário ou senha inválidos.'];
    }
    // Envia a resposta JSON.
    echo json_encode($resposta);
} else {
    // Método não permitido
    http_response_code(405);
    echo json_encode(['sucesso' => false, 'mensagem' => 'Método não permitido.']);
}
?>
