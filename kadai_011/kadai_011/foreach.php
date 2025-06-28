<!DOCTYPE html>
<html lang="ja">
  <meta charset="utf-8">
  <head>
    <title>PHP基礎11章課題</title>
  </head>

  <body>
    <p>
      <?php
      $products=['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];

      foreach($products as $key=>$product){
        echo "{$key}：{$product}<br>";
      }

      ?>
    </p>
  </body>
</html>