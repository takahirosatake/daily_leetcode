let jewels = "aA";
let stones = "aAAbbbb"


var numJewelsInStones = function(J, S) {
  let result = 0;
  for(let i = 0; i < S.length; i++) {
      if(J.indexOf(S.charAt(i)) >= 0)//indexof()で指定された値が、含まれているかを確認する 引数１(対象とする文字列など) charAt()文字列の中の指定された位置にある文字列を返す　引数１(index整数)
          result++;
  }
  return result;
};

// console.log(result); --> 3
