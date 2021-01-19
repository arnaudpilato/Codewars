function hello($name = ''): string {
  if (strlen($name) > 0) {
  return "Hello, " . ucwords(strtolower($name)) . "!";
  } else {
    return "Hello, World!";
  }
}
