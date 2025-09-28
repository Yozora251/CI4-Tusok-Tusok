<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Tusok-Tusok</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fffaf0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
      width: 350px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h3 class="text-center mb-4">Login</h3>
    <form action="check_login.php" method="post">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-warning w-100">Login</button>
    </form>
  </div>
</body>
</html>
