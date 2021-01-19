function findNeedle($haystack) {
  for ($i = 0; count($haystack); $i++) {
    if ($haystack[$i] == 'needle') {
      return "found the needle at position " . $i;
    }
  }
}
