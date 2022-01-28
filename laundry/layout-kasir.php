<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laundry</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampi_member.php">Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Outlet</a>
        </li>
        <li class="nav-item">
        <a class="btn btn-outline-danger" href="proses_logout.php" role="button">Logout</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
</body>
</html> 