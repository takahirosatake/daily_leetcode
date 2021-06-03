<?php
//We have n chips, where the position of the ith chip is position[i].

// We need to move all the chips to the same position. In one step, we can change the position of the ith chip from position[i] to:

// position[i] + 2 or position[i] - 2 with cost = 0.
// position[i] + 1 or position[i] - 1 with cost = 1.
// Return the minimum cost needed to move all the chips to the same position.



$position = [1, 2, 3];
minCostToMoveChips($position);

function minCostToMoveChips($position)
{
  $cost = 0;
  foreach ($position as $item) {
    if ($item % 2 != 0) {
      $cost++;
    }
  }
  return min(count($position) - $cost, $cost);
  //foreachで最初偶数は初期値として−１の処理を行なった後に、min関数を使って、最小値で返す。
}
