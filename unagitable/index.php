<?php
//①入力処理：値取得、テーブル座席の配列準備
$nm_array = explode(" ", fgets(STDIN));
$seat_num = $nm_array[0];
$group_num = $nm_array[1];
echo "シート数：" . $seat_num . "\n";
echo "グループ数：" . $group_num . "\n";

$seat = array();
$seat = array_pad($seat, $seat_num, 0); //0が空席
print_r($seat);

//②グループ毎に空席確認
//グループ分のループ
for ($i = 0; $i < $group_num; $i++) {
  $group_array = explode(" ", fgets(STDIN));
  $group_person_num = $group_array[0];
  $sit_point = $group_array[1];
  $sit_point -= 1;
  echo "グループの人数:" . $group_person_num . "\n";
  echo "着席開始位置:" . $sit_point . "\n";

  // グループ人数分のループ、空席確認
  $empty_flg = true; //trueはすわれる
  for ($j = $sit_point; $j < $sit_point + $group_person_num; $j++) {
    //円卓処理
    if ($j >= $seat_num) {
      $search_point = $j - $seat_num;
    } else {
      $search_point = $j;
    }
    //echo $search_point;
    // 空席確認
    if ($seat[$search_point] > 0) {
      $empty_flg = false;
      break;
    }
  }
  var_dump($empty_flg);
  //③席が空いていたら座る処理
  if ($empty_flg == true) {
    //グループの人数分のループ、着席処理
    //円卓処理
    for ($j = $sit_point; $j < $sit_point + $group_person_num; $j++) {
      //円卓処理
      if ($j >= $seat_num) {
        $search_point = $j - $seat_num;
      } else {
        $search_point = $j;
      }
      //echo $search_point;
      // 着席処理
      $seat[$search_point] = 1;
    }
  }
  print_r($seat);
}
// 12 6
// 4 6
// 4 8
// 4 10
// 4 12
// 4 2
// 4 4

// 6 3
// 3 2
// 1 6
// 2 5

// list($seatNum, $groupNum) = explode(' ',fgets(STDIN));
    
//     $table = array_fill(1, $seatNum, 0);
//     // $table = array_pad(array(), $seatNum, 0);
    
//     $count = 0; //何人入ったかをカウントする 
//     $empty_flag = true;
    
//     for($i=0; $i<$groupNum; $i++){
//         list($groupPersonNum , $sitPosition) = explode(' ',fgets(STDIN));
        
//         for($j=$sitPosition; $j < $sitPosition+$groupPersonNum; $j++){
//              //配列の円卓のテーブルにしなければならない　
//             if($j > $seatNum){
//                 $searchPoint = (int)$j - $seatNum; 
//             } else { 
//                 $searchPoint = (int)$j;
//             }
//             //$j % $seatNumで円卓の処理を省略できる
//             if($table[$searchPoint] > 0){
//                 $empty_flag = false;
//                 break;
//             }
            
                
//         }
        
//         if($empty_flag == true){
//             for($j=$sitPosition; $j < $sitPosition+$groupPersonNum; $j++){
//                  //配列の円卓のテーブルにしなければならない　
//                 if($j > $seatNum){
//                     $searchPoint = (int)$j - $seatNum; 
//                 } else { 
//                     $searchPoint = (int)$j;
//                 }
//                 //$j % $seatNumで円卓の処理を省略できる
//                 $table[$searchPoint] = 1;
//                 $count++;
//            }
//         }
//     }
    
//     // print_r($table);
//     echo $count;
