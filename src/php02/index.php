<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a href="#"><h1 class="site__logo">World Clock</h1></a>
    </div>
  </header>
  <main>
      <div class="content">
        <div class="title">
          <h2 class="title__text">日本と世界の時間を比較</h2>
        </div>

        <div class="form__content">
          <form action="result.php" class="city-form" get="get">
            <div class="city-form__select">
              <select name="city" class="city-form__list">
                <option value="シドニー">シドニー</option>
                <option value="東京">東京</option>
                <option value="上海">上海</option>
                <option value="モスクワ">モスクワ</option>
                <option value="ロンドン">ロンドン</option>
                <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                <option value="ニューヨーク">ニューヨーク</option>
              </select>
              <div class="city-form__submit">
              <input class="city-form__button" type="submit" value="検索">
            </div>
            </div>
            
          </form>
        </div>
      </div>
    </main>
</body>
</html>