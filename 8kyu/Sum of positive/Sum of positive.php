function positive_sum($arr) {
  $sum = [];
  foreach ($arr as $key) {
    if ($key > 0) {
      $sum[] = $key;
    }
  }
  return array_sum($sum);
}
