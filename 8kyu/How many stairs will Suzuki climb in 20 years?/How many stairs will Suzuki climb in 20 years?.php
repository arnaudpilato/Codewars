function stairsIn20($arr) {
  foreach ($arr as $value) {
    $sum += array_sum($value);
  }
  return $sum * 20;
}
