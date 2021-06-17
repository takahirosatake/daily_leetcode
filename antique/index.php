<?

$char = str_split(fgets(STDIN));

var_dump($char);

$nums = 0;

foreach ($char as $item) {
  if ($item === "<") {
    $nums += 10;
  } elseif ($item === "/") {
    $nums += 1;
  } else {
    continue;
  }
}
print $nums;
