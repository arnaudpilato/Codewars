function fake_bin(string $s): string {
  $binary = [];
  for ($i = 0; $i < strlen($s); $i++) {
    if ($s[$i] < 5) {
      $binary[] = 0;
    }
    if ($s[$i] >= 5) {
      $binary[] = 1;
    } 
  }
  return implode($binary);
}
