function reverseSeq ($n) {
  $array = [];
  for ($n; $n > 0; $n--) {
    $array[] = $n;
  }
  return $array;
}
