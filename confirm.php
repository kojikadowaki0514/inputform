<?php
// POSTリクエストから入力データを取得
$name     = $_POST['user_name'];
$email    = $_POST["user_email"];
$gender   = $_POST["user_gender"];
$category = $_POST["category"];
$message  = $_POST["message"];

// POSTの中身を確認
// var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <h2>入力内容をご確認ください。</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <td>お名前</td>
      <!-- POSTリクエストから取得した名前を表示 -->
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>メールアドレス</td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <td>性別</td>
      <td><?php echo $gender; ?></td>
    </tr>
    <tr>
      <td>お問い合わせ種別</td>
      <td><?php echo $category; ?>/td>
    </tr>
    <tr>
      <td>お問い合わせ内容</td>
      <td><?php echo $message; ?>/td>
    </tr>
  </table>

  <p>
    <!-- ボタンをクリックされたときに、指定したページに遷移させる -->
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <!-- ボタンをクリックしたときに、前のページに戻る -->
    <!-- form.phpに戻っても入力された値は、ブラウザのキャッシュ機能により、保持されている（入力された値は消えない） -->
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
</body>
</html>