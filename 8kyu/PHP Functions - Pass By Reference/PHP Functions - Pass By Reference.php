$n = 10;
$i = 5;

function double(&$n) {
  $n = $n * 2;
};

function halve(&$n) {
  $n = $n / 2;
};

function enlarge(&$n, $i) {
  $n = $n * $i;
};
