<?php
function past($h, $m, $s) {
  $hours = 3600000 * $h;
  $minutes = 60000 * $m;
  $seconds = 1000 * $s;
  
  return $hours + $minutes + $seconds;
}
