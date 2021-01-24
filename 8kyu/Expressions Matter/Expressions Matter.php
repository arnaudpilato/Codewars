function expressionMatter($a, $b, $c) {
  if ($a > 0 && $b > 0 && $c > 0 && $a <= 10 && $b <= 10 && $c <= 10) {
    $max[0] = $a * ($b + $c);
    $max[1] = $a * $b * $c;
    $max[2] = $a + $b + $c;
    $max[3] = ($a + $b) * $c;
    
    return max($max);
  }
}
