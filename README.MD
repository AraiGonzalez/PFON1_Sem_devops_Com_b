# Práctica Formativa Obligatoria N° 1, Comisión B
# Ayelen Caparra, Arai Gonzalez
Fronted
<---------------------------------------------------------------->
Método: fetch()

Parámetros enviados (formato JSON en el body):
{
    "username": "Texto ingresado en el input con id='username'",
    "password": "Texto ingresado en el input con id='password'"
}

Ejemplo de llamada:
fetch('http://localhost/PFON1_Sem_devops_Com_b/backend.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        username: 'aye',
        password: '123'
    })
})

Respuesta esperada del backend:
{
    status: "ok"
}
o
{
    status: "error",
    message: "Credenciales incorrectas"
}
<---------------------------------------------------------------->