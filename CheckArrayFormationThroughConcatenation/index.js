//You are given an array of distinct integers arr and an array of integer arrays pieces, where the integers in pieces are distinct. Your goal is to form arr by concatenating the arrays in pieces in any order. However, you are not allowed to reorder the integers in each array pieces[i].

//Return true if it is possible to form the array arr from pieces. Otherwise, return false.


// Input: arr = [85], pieces = [[85]]
// Output: true

// Input: arr = [15,88], pieces = [[88],[15]]
// Output: true
// Explanation: Concatenate [15] then [88]


// Input: arr = [49,18,16], pieces = [[16,18,49]]
// Output: false
// Explanation: Even though the numbers match, we cannot reorder pieces[0].

// Input: arr = [49,18,16], pieces = [[16,18,49]]
// Output: false
// Explanation: Even though the numbers match, we cannot reorder pieces[0].

var canFormArray = function(arr, pieces) {
  let res = []
  for (let i = 0; i < arr.length; i++){
      let num = arr[i];
      for( piece of pieces ){
          if(piece[0] === num){
              res.push(...piece);
              break;
          } 
      }
  }
  return check(arr, res);
  
  function check(arr,res){
      if (arr.length !== res.length) return false;
      for (let i = 0; i < arr.length; i++){
          if(arr[i] !== res[i]) return false;
      }
      return true;
  }
};
