<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project1 - Riyanuari Ramdhani (1119110002)</title>
  <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <header class="bg-color-gradient">
    <nav class="container d-flex">
      <h3 class="flex-3">Rytechnology</h3>
      <div id="ctrl" class="bg-color-secondary1">=</div>
      <ul id="nav" class="flex-1 d-flex">
        <li class="<?= (!isset($_GET['p'])) ? 'active' : '' ?>">
          <a href="view.php">Home</a>
        </li>
        <li class="<?= (!isset($_GET['p'])) ? '' : 'active' ?>">
          <a href="view.php?p=about">About</a>
        </li>
        <li>
          <a href="index.php">Logout</a>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    <?php 
      if(!isset($_GET['p'])){
        include_once "view/parallax.php";  
      };
      include_once "view/about.php";
    ?>  
  </main>

  <footer class="bg-color-gradient txt-center">
    Build With ❤️ Tangerang
    <br />
    <a href="https://ini.space/rriyanuari" class="color-primary1" style="text-decoration: underline!important;">@rriyanuari</a>
  </footer>
</body>

</html>