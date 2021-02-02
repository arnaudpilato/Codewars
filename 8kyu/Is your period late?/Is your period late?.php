function periodIsLate($last, $today, $cycleLength) {
  $difference = date_diff($last, $today);
  if ($difference->days > $cycleLength) {
    return true;
  } else {
    return false;
  }
}
