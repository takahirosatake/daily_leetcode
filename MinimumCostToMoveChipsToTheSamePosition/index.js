//パターン１　reduceメソッド

let chips = [1,2,3]


var minCostToMoveChips = function(chips) {
  let even = chips.reduce( (a,b) => a + +!(b % 2), 0); //reduceメソッド隣あう２つの配列要素を左から右へ同一の要素して返すメソッド。 配列の長さだけ繰り返し処理するbの要素が２で割り切れる場合はあ、+=１,割り切れない場合は、0とする
  return Math.min(even, chips.length - even);//Math.min()で最小の要素を返す。
};


//パターン２forメソッド
let odd = 0;
    let even = 0;
    for(let chip of chips) {
        if (chip % 2 === 0) even++;
        else odd++;
    }
    return Math.min(odd, even);


