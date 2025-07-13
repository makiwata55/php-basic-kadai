<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;

            // メソッドを定義する
            public function show_price(int $price) {
                $this->price = $price;
            }
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

    
        // インスタンス化する
        $food = new Food('potato', 250);
        print_r($food);
        echo '<br>';

        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
            public function show_height(int $height) {
                $this->height = $height;
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        $animal = new Animal('dog', 60, 5000);
        print_r($animal);

        $food->show_price(250);

        $animal->show_height(60);

        
        ?>
    </p>
</body>

</html>