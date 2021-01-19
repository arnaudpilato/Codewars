function toJadenCase($string) 
{
  $arrayStrings = explode(",", $string);
    return ucwords($string);
}
