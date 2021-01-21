function seatsInTheater($nCols, $nRows, $col, $row) {
  $x = $nCols - $col + 1;
  $y = $nRows - $row;
  return $x * $y;
}
