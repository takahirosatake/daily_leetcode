// Given numBottles full water bottles, you can exchange numExchange empty water bottles for one full water bottle.

//   The operation of drinking a full water bottle turns it into an empty bottle.

//   Return the maximum number of water bottles you can drink.
//   Input: numBottles = 9, numExchange = 3
//   Output: 13
//   Explanation: You can exchange 3 empty bottles to get 1 full water bottle.
//   Number of water bottles you can drink: 9 + 3 + 1 = 13.


const numBottles = 9;
const numExchange = 3;

console.log(numWaterBottles(numBottles, numExchange));

var numWaterBottles = function(numBottles, numExchange) {
  let total = numBottles; 
  
  while(numBottles >= numExchange) {
      total += Math.floor(numBottles / numExchange)
      numBottles = Math.floor(numBottles / numExchange) + ( numBottles % numExchange)
  }
  return total
};
