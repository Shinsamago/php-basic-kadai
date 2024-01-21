<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編(class)</title>
</head>

<body>
    <p>
    <?php
    // クラスを定義する
    class Food {
        // プロパティを定義する                        
        private $name;
        private $price;
    // コンストラクタを定義する
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function show_price()
            {
                echo $this->price;
            }

    }
    // インスタンス化する
    $Food = new Food('patato', 250);
    // インスタンス$userの各プロパティの値を出力する
    print_r($Food);
    echo '<br>';

    // クラスを定義する
    class Animal {
        // プロパティを定義する                        
        private $name;
        private $height;
        private $weight;
    // コンストラクタを定義する
    public function __construct(string $name, int $height,int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    public function show_height()
    {
        echo $this->get_height();
    }
    public function get_height()
    {
        return $this->height;
    }
    }
    // インスタンス化する
    $Animal = new Animal('dog', 60,5000);
    // インスタンス$userの各プロパティの値を出力する
    print_r($Animal);
    echo '<br>';

    $Food->show_price();
    echo '<br>';
    $Animal->show_height();

    ?>
    </p>
</body>
</html>
