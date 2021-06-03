let nums = [1,2,3,4];


var runningSum = function(nums) {
  let sum = 0; 
  let array = [];
  
  for(let i = 0; i < nums.length; i++){
    sum += nums[i];
    array.push(sum);
  }
  return array
};


console.log(array)
