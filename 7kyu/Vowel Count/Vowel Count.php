function getCount($str) {
  $vowelsCount = 0;
  $string = strtolower($str);
  $vowels = ['a', 'e', 'i', 'o', 'u'];
  foreach ($vowels as $vowel) {
    $vowelsCount += substr_count($string, $vowel);
  }
  return $vowelsCount;
}
