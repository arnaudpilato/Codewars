function setAlarm(bool $employed, bool $vacation): bool {
  if ($employed === true && $vacation === false) {
    return true;
  } else {
    return false;
  }
}
