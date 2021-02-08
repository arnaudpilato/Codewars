function cubeChecker($volume, $side){
  if ($side > 0) {
    if ($side * $side * $side == $volume) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}
