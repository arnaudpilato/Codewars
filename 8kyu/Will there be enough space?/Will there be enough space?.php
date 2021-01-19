function enough($cap, $on, $wait) {
  if ($wait > $cap - $on) {
    return (($on + $wait) - $cap);
  } else {
    return 0;
  }
}
