<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP連想配列:課題007</title>
</head>
<body>
    <h1>連想配列の出力結果</h1>
    
    <?php
    // 連想配列の作成
    $vegetable = [
        "name" => "onion",
        "price" => 200,
        "weight" => 160
    ];

    // 配列の内容を出力
    echo "<pre>";
    print_r($vegetable);
    echo "</pre>";
    ?>
    
</body>
</html>