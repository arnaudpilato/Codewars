function isVow(array $a)
{
  foreach ($a as $key) {
    if ($key == 97) {
      $array[] = 'a';
    } else if ($key == 101) {
      $array[] = 'e';
    } else if ($key == 105) {
      $array[] = 'i';
    } else if ($key == 111) {
      $array[] = 'o';
    } else if ($key == 117) {
      $array[] = 'u';
    } else {
      $array[] = $key;
    }
  }
  return $array;
}
