function my_first_kata($a, $b) {
  if ((!is_int($a) && !is_float($a)) || (!is_int($b) && !is_float($b))) {
    return false;
  } else {
    return $a % $b + $b % $a;
  }
}
