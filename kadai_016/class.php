<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_016</title>
</head>
<body>
  <p>
    <?php
    class Food {
      public $name;
      public $price;

      public function __construct(string $name, int $price) {
        $this->name=$name;
        $this->price=$price;
      }
      public function set_price(int $price) {
        $this->price = $price;
      }
      public function show_price() {
        echo $this->price . '<br>';
      }
    }
    

    class Animal {
      public $name;
      public $height;
      public $weight;

      public function __construct(string $name, int $height, int $weight) {
        $this->name=$name;
        $this->height=$height;
        $this->weight=$weight;
      }
      public function set_height(int $height) {
        $this->height = $height;
      }
      public function show_height() {
        echo $this->height . '<br>';
      }
    }

    // インスタンス化する
    $Food = new Food('potato', 250);
    // インスタンス$Foodの各プロパティの値を出力する
    print_r($Food);
    echo '<br>';
    $Food->show_price();
    
    $Animal = new Animal('dog', 60, 5000);
    // インスタンス$Animalの各プロパティの値を出力する
    print_r($Animal);
    echo '<br>';
    $Animal->show_height();
    
    ?>
  </p>
</body>
</html>