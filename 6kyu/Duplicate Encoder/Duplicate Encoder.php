function duplicate_encode($word){
  $words = [];
  $strtolower = strtolower($word);
  for ($i = 0; $i < strlen($word); $i++) {
    if (substr_count($strtolower, $strtolower[$i]) === 1) {
      $words[] = '(';
    } else {
      $words[] = ")";
    }
  }
  return implode($words);
}
