
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      background-color: white;
      color: white;
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    }
    
    .logo {
      color: red;
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 30px;
    }
    
    .input-group {
      margin-bottom: 20px;
    }
    
    .input-group input {
      width: 100%;
      padding: 15px;
      border-radius: 5px;
      border: none;
      background-color: #d3d3d3;
      color: white;
      font-size: 16px;
    }
    
    .input-group input::placeholder {
      color: gray;
      width:100%;
    }
    
    .icon {
      color: gray;
      font-size: 18px;
      vertical-align: middle;
      margin-right: 10px;
    }
    
    .login-btn {
      width: 100%;
      padding: 15px;
      border-radius: 5px;
      border: none;
      background-color: red;
      color: white;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .login-btn:hover {
      background-color: #c70000;
    }
    
    .forgot-password {
      color: red;
      text-decoration: none;
      font-size: 14px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">Logo</div>
    <form action="index.php">
      <div class="input-group">
        <span class="icon">👤</span>
        <input type="text" placeholder="Nombre de usuario o correo electrónico" required>
      </div>
      <div class="input-group">
        <span class="icon">🔒</span>
        <input type="password" placeholder="Contraseña" required>
      </div>
      <a href="./index"><button type="submit" class="login-btn" >Iniciar sesión</button></a>
    </form>
    <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
  </br>
  <a href="./index" class="forgot-password">Regresar</a>
  </div>
</body>
</html>


