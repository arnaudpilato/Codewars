function howManyDalmations($number) {
  $dogs = ["Hardly any", "More than a handful!", "Woah that's a lot of dogs!", "101 DALMATIANS!!!"];
  if ($number <= 10) {
    return $dogs[0];
  } else if ($number <= 50) {
    return $dogs[1];
  } else if ($number == 101) {
    return $dogs[3];
  } else {
    return $dogs[2];
  }
}
