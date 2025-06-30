<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎課題16章</title>
</head>
<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function show_price(int $price) {
        $this ->price = $price;
        echo $this->price;
      }
      public function __construct(string $name, int $price){
        $this ->name=$name;
        $this ->price=$price;
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function show_height(int $height){
        $this ->height= $height;
        echo $this->height;
      }

      public function __construct(string $name, int $height, int $weight){
        $this ->name=$name;
        $this ->height=$height;
        $this ->weight=$weight;
      }
    }

    $banana = new Food('チョコバナナ',300);
    $cat = new Animal('猫',20,3);

    print_r($banana);
    echo "<br>";

    print_r($cat);
    echo "<br>";

    $banana->show_price(300);
    echo "<br>";

    $cat->show_height(20);
    ?>

  </p>
  </body>
</html>