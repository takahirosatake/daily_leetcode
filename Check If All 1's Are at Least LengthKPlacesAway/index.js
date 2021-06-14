// Given an array nums of 0s and 1s and an integer k, return True if all 1's are at least k places away from each other, otherwise return False.

// ０と１の番号が与えられた配列と整数Kが与えられます。
// 全ての１が少なくとも整数K桁離れている場合はtrue　K未満の場合は、falseを返しなさい

const nums = [1, 0, 0, 0, 1, 0, 0, 1];
const k = 2;
// output = true

// const nums = [1, 0, 0, 1, 0, 1];
// const k = 2;
// output = false

// const nums = [1, 1, 1, 1, 1];
// const k = 0;
// output = true


var kLengthApart = function(nums, k) {
  let count = k;
  for (const num of nums) {
      if(num === 1){
        if(count < k){
          return false;
        }
        count = 0;
      } else {
        count++;    
      }
      
  };
  return true;
};

