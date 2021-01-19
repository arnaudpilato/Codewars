function get_average($a) {
  foreach ($a as $key) {
    $sum += $key;
  }
  return floor($sum / count($a));
}
