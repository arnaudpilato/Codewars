function reverse($string) {
  $explode = explode(' ', $string);
  for ($i = count($explode) - 1; $i >= 0; $i--) {
    $reverseWords[] = $explode[$i];
  }
  return implode(' ', $reverseWords);
}
