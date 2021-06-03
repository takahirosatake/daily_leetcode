<?php
//文字列の置き換え

$address = "1.1.1.1";

defangIPaddr($address);

function defangIPaddr($address)
{
  $addressReplace = str_replace(".", "[.]", $address);
  //str_replace("検索を行う文字列","置き換えを行う文字列","対象の文字列");
  return print $addressReplace;
}
