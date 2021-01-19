function people_with_age_drink(int $old): string {
  if ($old < 14) {
    return "drink toddy";
  } elseif ($old > 13 && $old < 18) {
    return "drink coke";
  } elseif ($old > 17 && $old < 21) {
    return "drink beer";
  } else {
    return "drink whisky";
  }
}
