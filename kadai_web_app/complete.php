<?php

$employee_name = htmlspecialchars($_POST['employee_name'], ENT_QUOTES, 'UTF-8');
$employee_age = htmlspecialchars($_POST['employee_age'], ENT_QUOTES, 'UTF-8');
$department = htmlspecialchars($_POST['department'], ENT_QUOTES, 'UTF-8');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了</title>
</head>

<body>
    <h1>登録が完了しました。</h1>
    <p>社員情報がデータベースに保存されました。</p>
    <form action="form.php" method="post">
        <button type="submit">戻る</button>
    </form>
</body>

</html>