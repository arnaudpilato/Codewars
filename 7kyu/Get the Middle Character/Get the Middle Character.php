function getMiddle($text) {
  $divide = strlen($text);
    if ($divide % 2 === 0) { $result = $divide / 2;
        return substr($text, $result - 1, 2);

    } else {
        $result = round($divide / 2) - 1;
        return substr($text, $result, 1);
    }
}
