function calculator($a, $b, $sign) {
  if (!is_string($a) && !is_string($b)) {
    if ($sign === "+") {
      return $a + $b;
    } elseif ($sign === "-") {
      return $a - $b;
    } elseif ($sign === "*") {
      return $a * $b;
    } elseif ($sign === "/") {
      return $a / $b;
    } else {
      return 'unknown value';
    }
  } else {
    return 'unknown value';
  }
}
