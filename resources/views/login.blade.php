<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Librería</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 360px;
      text-align: center;
    }

    .login-container h2 {
      color: #d4af37;
      margin-bottom: 30px;
    }

    .input-group {
      position: relative;
    }



    .login-container input {
  padding: 12px 40px 12px 12px; /* espacio a la derecha para el icono */
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .eye-icon {
      position: absolute;
      right:80px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 18px;
      color: #666;
      background: transparent;
      border: none;
      padding: 0; 
   }

    .login-container button {
      padding: 12px;
      background-color: #d4af37;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-container button:hover {
      background-color: #b5962f;
    }

    .login-container p {
      margin-top: 15px;
      font-size: 0.9em;
      color: #666;
    }
  </style>
</head>
<body>
  @if(!empty($error))
  <div class="text-danger">
    <p>{{ $error }}</p>
  </div>
  @endif
  
  <div class="login-container">
    <h2>Bienvenido a FenFexBooks</h2>
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <input type="text" name="usuario" placeholder="Usuario" required>
      <div class="input-group">
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
        <span class="eye-icon" onclick="togglePassword()">👁️</span>
      </div>
      <button type="submit">Iniciar sesión</button>
    </form>
    <p>¿No tienes cuenta? <a href="#" style="color:#d4af37;">Regístrate</a></p>
  </div>

  <script>
    function togglePassword() {
      const passwordInput = document.getElementById('password');
      const eyeIcon = document.querySelector('.eye-icon');
      const isPassword = passwordInput.type === 'password';
      passwordInput.type = isPassword ? 'text' : 'password';
      eyeIcon.textContent = isPassword ? '🙈' : '👁️';
    }
  </script>
</body>
</html>
