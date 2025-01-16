<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai016</title>
</head>
<body>
   

    <?php
   
    class Food {
        public $name;
        public $price;

      
        public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
        }

    
        public function show_price() {
            echo "食品: {$this->name}, 価格: {$this->price} 円<br>";
        }
    }

    class Animal {
        public $name;
        public $height;
        public $weight;

    
        public function __construct($name, $height, $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

    
        public function show_height() {
            echo "動物: {$this->name}, 身長: {$this->height} cm<br>";
        }
    }

   
    $apple = new Food("りんご", 150);
    $banana = new Food("バナナ", 100);

   
    $elephant = new Animal("ゾウ", 300, 5000);
    $monkey = new Animal("サル", 60, 30);

   
    echo "<h1>インスタンス情報</h1>";
    print_r($apple);
    echo "<br>";
    print_r($banana);
    echo "<br>";
    print_r($elephant);
    echo "<br>";
    print_r($monkey);
    echo "<br><br>";

   
    echo "<h1>メソッドの実行</h1>";
    $apple->show_price();
    $banana->show_price();
    $elephant->show_height();
    $monkey->show_height();
    ?>

</body>
</html>