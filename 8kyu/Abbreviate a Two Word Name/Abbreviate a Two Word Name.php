function abbrevName($name)
{
  $array = explode(' ', strtoupper($name));
  return $array[0][0] . '.' . $array[1][0];
}
