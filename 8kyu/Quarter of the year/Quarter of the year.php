function quarterOf($month) {
  if ($month <= 3) {
    return 1;
  } elseif ($month > 3 && $month <= 6) {
    return 2;
  } elseif ($month > 6 && $month <= 9) {
    return 3;
  } else {
    return 4;
  }
}
