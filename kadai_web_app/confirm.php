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
    <title>確認画面</title>
</head>

<body>
    <h1>入力内容をご確認ください。</h1>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?= $employee_name ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?= $employee_age ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?= $department ?></td>
        </tr>
    </table>
    <form action="complete.php" method="post">
        <input type="hidden" name="employee_name" value="<?= $employee_name ?>">
        <input type="hidden" name="employee_age" value="<?= $employee_age ?>">
        <input type="hidden" name="department" value="<?= $department ?>">
        <button type="submit" name="confirm">確定</button>
    </form>
    <form action="form.php" method="post">
        <button type="submit">キャンセル</button>
    </form>
</body>

</html>