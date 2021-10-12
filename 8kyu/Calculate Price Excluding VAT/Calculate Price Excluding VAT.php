function excludingVatPrice($price){
  if ($price == null) {
    
    return -1;
  } else {
    
    return number_format($price / 1.15, 2);
  }
}
