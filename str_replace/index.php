<?php
$input_line = fgets(STDIN);
$target = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$str = str_replace($target, '', $input_line);

echo $str;
