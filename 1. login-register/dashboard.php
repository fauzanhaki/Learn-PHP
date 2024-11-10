<?php
session_start();
if (isset($_POST["logout"])) {
  session_unset();
  session_destroy();
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
  <div class="wrapper">
    <?php include "layout/header.html" ?>

    <div class="container">
      <div class="dashboard">
        <h3>
          Selamat datang
          <?= $_SESSION["username"] ?>
        </h3>
        <form action="dashboard.php" method="post">
          <button type="submit" name="logout">logout</button>
        </form>
      </div>
      <p>Ini adalah halaman dashboard</p>
    </div>

    <?php include "layout/footer.html" ?>
  </div>
</body>

</html>