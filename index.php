<?php
require __DIR__ . '/includes/bootstrap.php';
$u = current_user();
if ($u) redirect(($u['role'] === 'admin' ? 'admin' : 'user') . '/dashboard.php');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>MPS Result System</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body class="auth-body">
<div class="auth-card">
  <div class="logo big">MPS</div>
  <h1>MPS Result System</h1>
  <p class="muted"><?= e(setting('school')) ?><br>S.Y. <?= e(setting('school_year')) ?></p>
  <a class="btn btn-block" href="user/login.php" style="margin-bottom:10px;padding:12px">Teacher / User Log in</a>
  <a class="btn btn-light btn-block" href="admin/login.php" style="padding:12px">System Admin Log in</a>
  <div class="auth-links">New teacher? <a href="user/register.php">Create an account</a></div>
</div>
</body>
</html>
