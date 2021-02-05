function centuryFromYear($year) {
  if ($year % 100 === 0) {
    return floor($year / 100);
  } else {
    return (floor($year / 100) + 1);
  }
}
