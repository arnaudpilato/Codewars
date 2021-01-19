function mouth_size($animal) {
  $alligator = strtolower($animal);
  if ($alligator === 'alligator') {
    return 'small';
  } else {
    return 'wide';
  }
}
