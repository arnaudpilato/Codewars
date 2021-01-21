function sum_mix($a) {
  $numbers = preg_replace('/[^0-9]/', '', $a);
  foreach($numbers as $number) {
    $sum = $sum + $number;
  }
  return $sum;
}
