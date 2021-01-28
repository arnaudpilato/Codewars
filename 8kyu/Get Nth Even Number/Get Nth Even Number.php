function nthEven($n) {
  $total = $n * 2;
  if ($total % 2 != 0) {
    return $total - 1;
  } else {
    return $total - 2;
  }
}
