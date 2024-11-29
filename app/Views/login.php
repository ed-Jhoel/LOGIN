<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      background: #f5f5f5;
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      color: #333;
    }

    .card {
      background: #ffffff;
      border-radius: 8px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      padding: 30px 20px;
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    h3 {
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 20px;
      color: #555;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .form-group label {
      font-size: 14px;
      font-weight: 400;
      color: #555;
      margin-bottom: 5px;
      display: block;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ddd;
      border-radius: 4px;
      background: #f9f9f9;
      transition: border-color 0.3s ease;
    }

    .form-group input:focus {
      border-color: #007bff;
      outline: none;
      background: #ffffff;
    }

    .btn {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      font-weight: 500;
      color: #ffffff;
      background: #007bff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .btn:hover {
      background: #0056b3;
    }

    .text-center {
      margin-top: 15px;
      font-size: 14px;
      color: #666;
    }

    .text-center a {
      color: #007bff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .text-center a:hover {
      color: #0056b3;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="card">
    <h3>Iniciar Sesión</h3>
    <form action="<?php echo base_url('/login') ?>" method="POST">
      <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="Ingresa tu usuario" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required>
      </div>
      <button type="submit" class="btn">Entrar</button>
    </form>
    <div class="text-center">
      <span>¿No tienes una cuenta?</span>
      <a href="/register">Regístrate aquí</a>
    </div>
  </div>
</body>
</html>
