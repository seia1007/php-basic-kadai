<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_sort</title>
</head>
<body>
  <p>
    <?php

function sort_2way($array, $order) {
  if ($order) {
    sort($array); // 昇順にソート
    echo '昇順にソートします。<br>';
  }
  else {
    rsort($array); // 降順にソート
    echo '降順にソートします。<br>';
  }
  
  foreach ($array as $value) {
    echo $value . '<br>';
  }
}
  // ソートする配列を宣言
  $nums = [15, 4, 18, 23, 10 ];

  sort_2way($nums,true);

  echo '<br>';

  sort_2way($nums,false);

    ?>
  </p>
</body>
</html>