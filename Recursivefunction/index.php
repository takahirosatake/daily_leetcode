<?php

function kaijou($nums)
{
  if ($nums > 0)
    return $nums * kaijou($nums - 1); //10! = 10 x 9 x 8 x 7 x 6 x 5 x 4 x 3 x 2 x 1
  return 1;
}

echo kaijou(10);
