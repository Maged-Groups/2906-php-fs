<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regular Expressions</title>

  <style>
    * {
      margin: 0 0 10px;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 18px;
    }

    nav {
      background-color: #223;
      display: flex;
      justify-content: space-around;
      padding: 10px 0;
    }

    nav a {
      color: #eee;
      text-decoration: none;
    }

    p {
      background-color: #112;
      padding: 10px;
      color: #6f3;
    }

    small {
      color: #ff0;
    }

    h5 {
      background-color: #334;
      color: #eee;
      padding: 25px 15px;
      position: relative;
    }

    h5::before {
      content: 'PATTERN';
      font-size: 0.4rem;
      position: absolute;
      top: 10px;
      left: 10px;
      text-decoration: underline;
      color: #fff;
    }

    h6 {
      background-color: #eef;
      padding: 10px;
      position: relative;
    }

    h6::before {
      content: 'DESCRIPTION';
      font-size: 0.6rem;
      position: absolute;
      top: -2px;
      left: 10px;
      text-decoration: underline;
    }
  </style>

</head>

<body>



  <?php

  $files = scandir(__DIR__);

  // remove first 3 items frpm the array
  unset($files[0], $files[1]);

  echo '<nav>';

  foreach ($files as $file) {
    if (is_dir($file))
      continue;

    $url =  str_replace('.php', '', $file);
    $file = strtoupper($url);

    echo "<a href='?page=$url'>$file</a>";
  }

  echo '</nav>';


  // var_dump($_GET);

  require_once $_GET['page'] . '.php';



  ?>
</body>

</html>