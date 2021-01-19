function sumArray($array) {
  sort($array);
  for ($i = 1; $i < count($array) - 1; $i++) {
    $sum += $array[$i];
  }
  return $sum;
}
