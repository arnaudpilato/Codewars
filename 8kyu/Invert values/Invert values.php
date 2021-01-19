function invert(array $a): array {
  $newArray = [];
  foreach ($a as $key) {
    $newArray[] = $key * -1;
  }
  return $newArray;
}
