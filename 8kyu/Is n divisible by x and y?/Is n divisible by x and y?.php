function is_divisible($n, $x, $y) {
  if ($n / $x > 0 || $n / $y > 0) {
    if (is_int($n / $x) && is_int($n / $y)) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}
