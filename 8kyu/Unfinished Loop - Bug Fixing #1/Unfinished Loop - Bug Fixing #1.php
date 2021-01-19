function createArray($number){
  $newArray = [];
  for ($count = 1; $count < $number + 1; $count++){
    $newArray[] = $count;
  }
  return $newArray;
}
