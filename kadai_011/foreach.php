<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編課題11</title>
</head>

<body>
   <p>
       <?php
       $food = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];
       
      //  連想配列のの値とキーを1つずつ順番に出力する
       foreach ($food as $key => $value) {
        echo "{$key}：{$value}<br>";
       }
       ?>

   </p>
</body>

</html>