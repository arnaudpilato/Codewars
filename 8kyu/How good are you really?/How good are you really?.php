function betterThanAverage($classPoints, $yourPoints) {
  for ($i = 0; $i < count($classPoints); $i++) {
    $average = $average + $classPoints[$i];
  }
  $operator = $average / count($classPoints);
  if ($operator > $yourPoints) {
    return false;
  } else {
    return true;
  }
}
