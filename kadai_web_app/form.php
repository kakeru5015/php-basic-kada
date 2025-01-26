<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員情報入力フォーム</title>
</head>

<body>
    <h1>社員情報入力フォーム</h1>
    <form action="confirm.php" method="post">
        <label for="employee_name">社員名:</label><br>
        <input type="text" id="employee_name" name="employee_name" value="" required><br><br>

        <label for="employee_age">年齢:</label><br>
        <input type="number" id="employee_age" name="employee_age" value="" required><br><br>

        <label for="department">所属部署:</label><br>
        <select id="department" name="department" required>
            <option value="開発部">開発部</option>
            <option value="営業部">営業部</option>
            <option value="人事部">人事部</option>
        </select><br><br>

        <button type="submit" name="submit">送信</button>
    </form>
</body>

</html>