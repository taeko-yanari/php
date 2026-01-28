<?php
// status_codes.phpを読み込む
// status_codes配列からランダムに4つのインデックスキーを選ぶ

// status_codes配列から要素を1つずつ取り出して、ランダムにstatus_codeのindexキーを4つ選ぶ
// 取り出したindexキーの配列を作る
// その4つから1つの要素を選んで問題文にdescriptionを入れる

require_once('config/status_codes.php');

$random_indexes = array_rand($status_codes, 4);
foreach($random_indexes as $index) {
  $options[] = $status_codes[$index];
}

$question = $options[mt_rand(0,3)];

?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a href="#"><h1 class="site__logo">Status Code Quiz</h1></a>
    </div>
  </header>
  <main>
    <div class="content">
      <div class="question">
        <p class="question__title">Q.以下の内容に当てはまるステータスコードを選んでください</p>
        <p><?php echo $question['description'] ?></p>
      </div>

        <form class="answer__form" action="result.php" method="post">
          <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
          <div class="answer_form-list">
            <?php foreach($options as $option): ?>
              <div class="answer-group">
                <input class="answer-form__radio" type="radio" name="option" id="<?php echo $option['code'] ?>" value="<?php echo $option['code'] ?>">
                <label for="<?php echo $option['code'] ?>" class="answer__label"><?php echo $option['code'] ?></label>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="answer__button">
            <input class="answer__submit" type="submit" value="回答">
          </div>
        </form>
    </div>
  </main>
</body>
</html>