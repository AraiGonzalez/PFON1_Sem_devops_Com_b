<?php
header('Content-Type: application/json');

// Obtener los datos JSON del cuerpo de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['status' => 'error', 'message' => 'JSON inválido']);
    exit;
}

// Verificar si se recibieron los datos correctos
if (!empty($data['username']) && !empty($data['password'])) {
    $username = trim($data['username']);
    $password = trim($data['password']);

    $validUsername = 'usuarioEjemplo';
    $validPassword = 'contraseñaEjemplo';

    if ($username === $validUsername && $password === $validPassword) {
        // Login exitoso
        echo json_encode(['status' => 'ok']);
    } else {
        // Login fallido
        echo json_encode(['status' => 'error', 'message' => 'Credenciales incorrectas']);
    }
} else {
    // Datos no recibidos correctamente
    echo json_encode(['status' => 'error', 'message' => 'Datos no válidos o incompletos']);
}
?>