var findLucky = function(arr) {
  //new Map(); Mapオブジェクトを生成することで中身はキーと値を保持することができる
  const map = new Map();
  //for of で繰り返し処理　
  for (x of arr) {
  }　//hasメソッドでmapオブジェクトにkeyを保持しているか条件分岐　　trueならgetメソッドでkeyの値に＋１追加　falseならkeyにx,値に１を追加する
    map.has(x) ? map.set(x, map.get(x) + 1) : map.set(x, 1);
  
  
    //maxメソッドでarrの配列内のfilterメソッドで条件eの値とmapオブジェクトの該当するkey(e)と等しいものを抽出する。ない場合は−１を返す。
    return Math.max(...arr.filter(e => map.get(e) === e), -1);
};


var findLucky = function ( arr ) {
  return arr
      .reduce(( a, x ) => { 
          a[x] = (a[x] || 0) + 1
          return a
      }, [])
      .filter(( x, i ) => x === i)
      .pop() || -1
};


var findLucky = function ( arr ) {
  return arr
      .reduce(( a, x ) => {
          a[x] = (a[x] || 0) + 1
          return a
      }, [])
      .filter(( x, i ) => x === i)
      .pop() || -1
}
