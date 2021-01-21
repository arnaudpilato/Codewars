function datingRange($age) {
  if ($age < 14) {
    $min = floor($age - 0.10 * $age);
    $max = floor($age + 0.10 * $age);
    return $min . '-' . $max;
  } else {
    $min = floor(($age / 2) + 7);
    $max = floor(($age - 7) * 2);
    return $min . '-' . $max;
  }
}
