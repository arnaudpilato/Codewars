function elevator($left, $right, $call) {
  if ($left >= 0 && $right >= 0 && $call >= 0 || $left <= 2 && $right <= 2 && $call <= 2 ) {
    if ($right > $call && $left > $right) {
      return 'right';
    } else if ($right < $call && $left < $right) {
      return 'right';
      }else if ($right == $left || $left == $right) {
      return 'right';
    } else if ($right > $call && $left < $call) {
      return 'right';
    } else if ($right < $call && $left > $call) {
      return 'right';
    } else if ($right == $call) {
      return 'right';
    } else {
      return 'left';
    }
  }
}
