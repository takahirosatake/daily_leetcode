var defangIPaddr = function(address) {
  let str = ''
  
  for (let i in address){
      address[i] !== '.' ? str += address[i] : str += '[.]'
  }
  return str
  
};

// let defangIPaddr = function(address) {
//   return address.replace(/[.]/g,'[.]') replaceメソッドと正規表現をつかって該当する全ての値を置き換える
// };
