function accum($s) {
  $s = strtolower($s);
  for ($i = 0; $i < strlen($s); $i++) {
    $letters = "";
    for ($j = 0; $j < $i + 1; $j++) {
      $letters .= $s[$i];
    }
    $array[] = ucwords($letters);
  }
  return implode("-", $array);
}
