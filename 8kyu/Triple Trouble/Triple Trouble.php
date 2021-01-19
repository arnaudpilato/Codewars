function triple_trouble(string $one, string $two, string $three): string {
  for ($i = 0; $i < strlen($one); $i++) {
    $string[] = $one[$i] . $two[$i] . $three[$i];
  }
  return implode($string);
}
