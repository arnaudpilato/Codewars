function findIt(array $seq) : int
{
  $newSeq = array_count_values($seq);
  foreach ($newSeq as $key => $value) {
    if ($value % 2 != 0) {
      return $key;
    }
  }
}
