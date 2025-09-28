<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Tusok-Tusok</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fffaf0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .signup-box {
      background: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
      width: 380px;
    }
  </style>
</head>
<body>
  <div class="signup-box">
    <h3 class="text-center mb-4">Sign Up</h3>
    <form action="save_user.php" method="post">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-warning w-100">Sign Up</button>
      <p class="text-center mt-3">Already have an account? <a href="login.php">Login here</a></p>
    </form>
  </div>
</body>
</html>
