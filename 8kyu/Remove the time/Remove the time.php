function shortenToDate($longDate) {
  $array = explode(',', $longDate, -1);
  return implode($array);
}
