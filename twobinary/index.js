// Given two binary strings a and b, return their sum as a binary string.

var addBinary = function(a, b) {
  let c = BigInt(`0b${a}`);
  let d = BigInt(`0b${b}`);
  console.log(c);
  console.log(d);
  return ( c + d ).toString(2);
};
