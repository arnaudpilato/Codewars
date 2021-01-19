function feast($beast, $dish) {
  if ($beast[0] == $dish[0] && substr($beast, -1) == substr($dish, -1)) {
    return true;
  } else {
    return false;
  }
}
