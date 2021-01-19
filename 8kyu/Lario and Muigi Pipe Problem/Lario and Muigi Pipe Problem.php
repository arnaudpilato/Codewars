function pipeFix($numbers) {
  $lastNumber = count($numbers) - 1;
  var_dump($lastNumber);
  for ($i = $numbers[0]; $i < $numbers[$lastNumber] + 1; $i++ ) {
    $orderPipes[] = $i;
  }
  return $orderPipes;
}
