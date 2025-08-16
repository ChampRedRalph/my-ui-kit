<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - UI Kit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

  <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">Login</h4>
      <!-- Theme Toggle -->
      <button id="themeToggle" class="btn btn-sm btn-outline-secondary">🌙</button>
    </div>

    <form>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password">
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <div class="text-center mt-3">
    <a href="index.php" class="btn btn-link">← Back to Home</a>
</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/theme.js"></script>
</body>
</html>
