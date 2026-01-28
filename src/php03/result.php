<?php
// status_codes.phpを読み込む
require_once('config/status_codes.php');

// フォームの情報を受け取る
$answer_code = isset($_POST['answer_code']) ? htmlspecialchars($_POST['answer_code'], ENT_QUOTES) : null;

$option = isset($_POST['option']) ? htmlspecialchars($_POST['option'], ENT_QUOTES) : null;

// 選択されていない場合は、index.phpに戻す
if(empty($option)) {
  header('Location: index.php');
  exit;
}

foreach ($status_codes as $status_code) {
  if($answer_code === $status_code['code']) {
    $code = $status_code['code'];
    $description = $status_code['description'];
  }
}

  $result = $answer_code === $code;
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>
<body>

  <header class="header">
    <div class="header__inner">
      <a href="#"><h1 class="site__logo">Status Code Quiz</h1></a>
    </div>
  </header>

  <main>
    <div class="result__content">
      <div class="result">
        <?php if($result) : ?>
        <h2 class="result__text">正解</h2>
        <?php else : ?>
        <h2 class="result__text">不正解</h2>
        <?php endif; ?>
      </div>

      <table class="result__table">
        <tr class="result__table-col">
        <th class="result__table__header">ステータスコード</th>
        <td class="result__table__text"><?php echo $code ?></td>
      </tr>
      <tr class="result__table_col">
        <th class="result__table__header">説明</th>
        <td class="result__table__text"><?php echo $description ?></td>
      </tr>
      </table>

    </div>
  </main>
</body>
</html>