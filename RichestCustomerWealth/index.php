<?php
// You are given an m x n integer grid accounts where accounts[i][j] is the amount of money the i​​​​​​​​​​​th​​​​ customer has in the j​​​​​​​​​​​th​​​​ bank. Return the wealth that the richest customer has.

// A customer's wealth is the amount of money they have in all their bank accounts. The richest customer is the customer that has the maximum wealth.

function maximumWealth($accounts)
{
  $length = count($accounts);
  for ($i = 0; $i < $length; $i++) {
    $result[] = array_reduce($accounts[$i], function ($x, $y) {
      $x += $y;
      return $x;
    }, 0);
  }
  var_dump($result);
  return max($result);
}
