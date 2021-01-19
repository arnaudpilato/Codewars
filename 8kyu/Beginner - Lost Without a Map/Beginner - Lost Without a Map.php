function maps($x) {
  $newArray = [];
  foreach ($x as $key) {
    $newArray[] = $key * 2;
  }
  return $newArray;
}
