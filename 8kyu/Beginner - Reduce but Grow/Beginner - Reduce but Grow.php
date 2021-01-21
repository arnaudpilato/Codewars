function grow($a) {
  $calculator = $a[0];
  for ($i = 1; $i < count($a); $i++) {
    $calculator = $calculator * $a[$i];
  }
  return $calculator;
}
