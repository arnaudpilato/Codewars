function twoSort($s) {
  sort($s);
  for ($i = 0; $i < strlen($s[0]); $i++) {
    $stars .= $s[0][$i] . '***';
  }
  return substr($stars, 0, -3);$stars;
}
