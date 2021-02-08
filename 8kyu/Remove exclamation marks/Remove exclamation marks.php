function remove_exclamation_marks($string) {
  return preg_replace('/!/', '', $string);
}
