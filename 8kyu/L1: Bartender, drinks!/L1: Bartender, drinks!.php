function get_drink_by_profession(string $s): string {
  $strtolower = strtolower($s);
  if ($strtolower == "jabroni") {
    return "Patron Tequila";
  } else if ($strtolower == "school counselor") {
    return "Anything with Alcohol";
  } else if ($strtolower == "programmer") {
    return "Hipster Craft Beer";
  } else if ($strtolower == "bike gang member") {
    return "Moonshine";
  } else if ($strtolower == "politician") {
    return "Your tax dollars";
  } else if ($strtolower == "rapper") {
    return "Cristal";
  } else {
    return "Beer";
  }
}
