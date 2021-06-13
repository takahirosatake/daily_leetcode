<!-- 
  Given numBottles full water bottles, you can exchange numExchange empty water bottles for one full water bottle.

  The operation of drinking a full water bottle turns it into an empty bottle.

  Return the maximum number of water bottles you can drink.
  Input: numBottles = 9, numExchange = 3
  Output: 13
  Explanation: You can exchange 3 empty bottles to get 1 full water bottle.
  Number of water bottles you can drink: 9 + 3 + 1 = 13. -->


<?php

$numBottles = 9;
$numExchange = 3;

echo numWaterBottles($numBottles, $numExchange);

function numWaterBottles($numBottles, $numExchange)
{
  $total = $numBottles;
  while ($numBottles >= $numExchange) {
    $total += floor($numBottles / $numExchange);
    $numBottles = floor($numBottles / $numExchange) + ($numBottles % $numExchange);
  }
  return $total;
}
