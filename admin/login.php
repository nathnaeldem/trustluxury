<?php
require __DIR__ . '/auth.php';

if (admin_logged_in()) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    if ($username === '' || $password === '') {
        $error = 'Enter username and password.';
    } elseif (attempt_login($username, $password)) {
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid credentials.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | Trust Luxury</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="assets/admin.css" rel="stylesheet">
</head>
<body>
<div class="login-wrap">
  <div class="login-card">
    <p class="text-uppercase mb-1" style="letter-spacing:.2em;font-size:.7rem;color:#e85d3b;font-weight:600;">CMS</p>
    <h1>Trust Luxury Admin</h1>
    <p class="text-muted mb-4">Sign in to manage website images.</p>
    <?php if ($error): ?><div class="alert-soft mb-3"><?= htmlspecialchars($error) ?></div><?php endif; ?>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required autofocus value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
      </div>
      <div class="mb-4">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-admin w-100">Sign In</button>
    </form>
  </div>
</div>
</body>
</html>
