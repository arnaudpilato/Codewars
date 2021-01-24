function reverseWords($str) {
  $explode = explode(' ', $str);
  for ($i = count($explode) - 1; $i >= 0; $i--) {
    $reverse[] = $explode[$i];
  }
  return implode(' ', $reverse);
}
