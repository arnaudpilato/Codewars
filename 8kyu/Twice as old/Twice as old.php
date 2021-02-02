function twice_as_old($dad_years_old, $son_years_old) {
  if ($son_years_old * 2 > $dad_years_old) {
    return ($son_years_old * 2) - $dad_years_old;
  } else {
    return $dad_years_old - ($son_years_old * 2);
  }
}
