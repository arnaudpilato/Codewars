function fixTheMeerkat($arr) {
  $newArray = [];
  for ($i = count($arr) -1; $i >= 0; $i--) {
    $newArray[] = $arr[$i];
  }
  return $newArray;
}
