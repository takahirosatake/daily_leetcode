// You are given a string s of even length. Split this string into two halves of equal lengths, and let a be the first half and b be the second half.

// Two strings are alike if they have the same number of vowels ('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'). Notice that s contains uppercase and lowercase letters.

// Return true if a and b are alike. Otherwise, return false.

// 偶数の文字列が与えられています。文字列を等しく分割した時に小文字大文字を含む母音の数が等しくなるか調べなさい




let s = 'book'
// output = true

// let s = 'textbook'
// output = false

// let s = 'MerryChristmas'
// output = false

console.log(halvesAreAlike);

//自己回答
var halvesAreAlike = function(s) {
  const vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
  let a = s.substring(0, s.length /2 ).split('');
  let b = s.substring(s.length /2 ).split('');
  
  let countA = 0;
  let countB = 0; 
  
  for(let i=0; i<=a.length; i++){
      if(vowels.includes(a[i])) {
         countA++;
      }  
       if(vowels.includes(b[i])) {
         countB++;
      }
  }
  return countA === countB;
  
};

// パターン２
var halvesAreAlike = function(s) {
  let vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
  //reduceメソッドを使って、acc（配列の最初の要素から順番にn(次の要素nに代入します)その際に母音が含まれてるかを使いカウントしている。
  let a = s.substr(0, s.length/2).split("").reduce((acc, n)=>{
      (vowels.includes(n))? acc++:acc;
      return acc;
  }, 0);
  let b = s.substr(s.length/2).split("").reduce((acc, n)=>{
      (vowels.includes(n))? acc++:acc;
      return acc;
  }, 0);
  return (a===b);
};

// パターン３
var halvesAreAlike = function (s) {
	let h1 = s.substring(0, s.length / 2);
	let h2 = s.substring(s.length / 2);

	let set = new Set(["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"]);

	let reducer = (prev, next) => { //reduceメソッドと同じ動きprev 最初の要素 next 次の要素で動作をするhasメソッドで特定のキーに対する要素が Map オブジェクト内に存在していたら、true を返します。さもなければ、false を返します。
		prev += set.has(next) ? 1 : 0;
		return prev;
	};

	return (
		[...s.substring(0, s.length / 2)].reduce(reducer, 0) ===
		[...s.substring(s.length / 2)].reduce(reducer, 0)
	);
};
