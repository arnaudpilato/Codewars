function square_sum($numbers) {
  for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i] * $numbers[$i];
  }
  return $sum;
}
