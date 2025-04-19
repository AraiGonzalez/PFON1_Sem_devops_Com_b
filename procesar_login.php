<?php
header('Content-Type: application/json');

// Obtener el contenido JSON del body
$data = json_decode(file_get_contents('php://input'), true);

// Validación simple
if (!isset($data['username']) || !isset($data['password'])) {
    echo json_encode(['status' => 'error', 'message' => 'Faltan datos']);
    exit;
}

// Datos hardcodeados para la validación
$usuario_valido = 'aye';
$contrasena_valida = '123';

// Comparación
if ($data['username'] === $usuario_valido && $data['password'] === $contrasena_valida) {
    echo json_encode(['status' => 'ok', 'message' => 'Login exitoso']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Credenciales inválidas']);
}
?>