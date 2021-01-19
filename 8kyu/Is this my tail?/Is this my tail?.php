function equivalent($body, $char) {
  if (substr($body, -1) === $char) {
    return true;
  } else {
    return false;
  }
}
