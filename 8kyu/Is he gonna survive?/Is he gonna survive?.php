function hero(int $bullets, int $dragons){
  if ($dragons * 2 > $bullets) {
    return false;
  } else {
    return true;
  }
}
