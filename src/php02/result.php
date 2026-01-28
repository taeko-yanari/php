<?php

require_once('functions/search_city_time.php');

$tokyo = searchTimeCity('東京');

$city = htmlspecialchars($_GET['city'],ENT_QUOTES);

$comparison = searchTimeCity($city);


?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a href="#"><h1 class="site__logo">World Clock</h1></a>
    </div>
  </header>

  <main>
      <div class="content">
        <div class="result-cards">
          <div class="result-card">
            <div class="result-card__inner">
              <img src="img/<?php echo $tokyo['img'] ?>" alt="">
            </div>
            <div class="result-card__text">
              <div class="result-card__city"><?php echo $tokyo['name'] ?></div>
              <div class="result-card__time"><?php echo $tokyo['time'] ?></div>
            </div>
          </div>

          <div class="result-card">
            <div class="result-card__inner">
              <img src="img/<?php echo $comparison['img'] ?>" alt="">
            </div>
            <div class="result-card__text">
              <div class="result-card__city"><?php echo $comparison['name'] ?></div>
              <div class="result-card__time"><?php echo $comparison['time'] ?>/div>
            </div>
          </div>
        </div>
      </div>
    </main>
</body>
</html>