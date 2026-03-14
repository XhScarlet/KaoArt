<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Verifica login
if ($username === 'NewTec' && $password === 'Senha1234') {
    // Login bem-sucedido: mostra a página HTML completa
    echo '
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login Bem-Sucedido - KaoArt</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    </head>

    <body style="background-color: #f3f0f8;">

      <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg text-center p-4" style="max-width: 400px; border-radius: 12px;">
          <div class="card-body">
            <i class="bi bi-check-circle-fill fs-1 mb-3" style="color:#6f42c1;"></i>
            <h3 class="mb-3" style="color:#6f42c1;">Login Bem-Sucedido!</h3>
            <p class="mb-4">Olá ' . htmlspecialchars($username) . '! Você entrou na sua conta com sucesso. Agora pode continuar suas compras.</p>
            <a href="produtos.html" class="btn btn-lg btn-primary" style="background-color:#6f42c1; border-color:#6f42c1;">
              Continuar Comprando
            </a>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
    ';
} else {
    // Login inválido
    echo '
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login Inválido - KaoArt</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    </head>

    <body style="background-color: #f8d7da;">
      <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg text-center p-4 border-danger" style="max-width: 400px; border-radius: 12px;">
          <div class="card-body">
            <i class="bi bi-x-circle-fill fs-1 mb-3" style="color:#dc3545;"></i>
            <h3 class="mb-3 text-danger">Login Inválido!</h3>
            <p class="mb-4">Usuário ou senha incorretos. Tente novamente.</p>
            <a href="login.html" class="btn btn-danger">Voltar ao Login</a>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
    ';
}
?>
