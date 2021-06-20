// You are given an integer n. An array nums of length n + 1 is generated in the following way:

// nums[0] = 0
// nums[1] = 1
// nums[2 * i] = nums[i] when 2 <= 2 * i <= n
// nums[2 * i + 1] = nums[i] + nums[i + 1] when 2 <= 2 * i + 1 <= n
// Return the maximum integer in the array nums​​​.

// Question 1
// Input: n = 7
// Output: 3

// Question 2
// Input: n = 2
// Output: 1

//Math.max() 関数は、入力引数として与えられた0個以上の数値のうち最大の数を返します。
// Math.max(1, 3, 2) => output = 3
//Math.max(...array1)) スプレッド演算子を用いて配列の最大値を求めることもできます。 

var getMaximumGenerated = function(n) {
     
  if (n == 0) return 0;
  let nums = [0,1];

  for(let i =1; i < n+1; i++ ){
      
      let index = 2 * i;
      if (index >= 2 && index <= n){
          nums[index] = nums[i];
      } 
      if( index +1 >= 2 && index +1 <= n){
          nums[index + 1] = nums[i] + nums[i+1];
      }
  }
 return Math.max(...nums);
 
};
