'use strict';
const canvas = document.createElement('canvas');
//canvasのメソッドが使えるようになる
const ctx = canvas.getContext('2d');
canvas.width = 400;
canvas.height = 400;
canvas.setAttribute('style', 'display:block; margin: 0 auto;  background-color: #aaa');
document.body.appendChild(canvas);

//グリッド２０pxに設定縦２０マス横２０マス
const GRID = 20;

//ステージのグリッドで分割する
const STAGE = canvas.width / GRID;

//スネークを生成 x y 座標でポジション　dx dy座標はスネークの移動座標
const snake = {
  x: null,
  y: null,
  dx: 1, 
  dy: 0,
  tail: null,//蛇が何マス分いるか
  //蛇の描画処理
  update: function(){
    this.body.push({x: this.x, y: this.y});

    //蛇を動かす
    this.x += this.dx;
    this.y +=this.dy;


    ctx.fillStyle = 'green';
    this.body.forEach(obj => {
      //fillRect(x座標, y座標, 横幅サイズ,　縦幅サイズ)を描画する
      ctx.fillRect(obj.x*GRID, obj.y*GRID, GRID-2, GRID-2);
      if(this.x === obj.x && this.y === obj.y){
        alert('GAME OVER');
        init();
      }
    })
  //蛇の長さが配列の長さよりも大きくならないよう制限する
  if(this.body.length > this.tail) this.body.shift();
  }
}
//食べ物を生成する
const item = {
  x: null,
  y: null,
  update: function(){
      ctx.fillStyle = 'red';
      ctx.fillRect(this.x*GRID, this.y*GRID, GRID-2, GRID-2);
      
  }

}
//リセットされた時の処理init　蛇の初期値　りんごの初期値
const init = ()=> {
  snake.x = STAGE / 2;
  snake.y = STAGE / 2;
  //４マス分の蛇とする
  snake.tail = 4;
  //蛇の体を配列で管理
  snake.body = [];
  item.x = Math.floor(Math.random() * GRID);
  item.y = Math.floor(Math.random() * GRID);

} 

//ループ処理
const loop = ()=> {
  //前の描画をクリアにする履歴を残さない
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  //蛇行動開始
  snake.update();
  //食べ物配置
  item.update();
  //ヘビが画面外に消えないように制御
  if(snake.x < 0 )snake.x = STAGE-1;
  if(snake.y < 0 )snake.y = STAGE-1;
  if(snake.x > STAGE-1 )snake.x = 0;
  if(snake.y > STAGE-1 )snake.y = 0;
  //アイテムを食べられるようにする
  if(item.x == snake.x && item.y == snake.y){
    snake.tail++;
    item.x = Math.floor(Math.random() * GRID);
    item.y = Math.floor(Math.random() * GRID);
  }

} 

//初期化関数を呼び出す
init();
//蛇の移動回数
setInterval(loop, 1000/10);


//キーボードを入力した時のイベント処理
document.addEventListener('keydown', (e)=>{ 
  switch(e.key){
    case 'ArrowLeft':
        snake.dx = -1;
        snake.dy = 0;
        break;
      case 'ArrowRight':
        snake.dx = 1;
        snake.dy = 0;
        break;
      case 'ArrowUp':
        snake.dx = 0;
        snake.dy = -1;
        break;
      case 'ArrowDown':
        snake.dx = 0;
        snake.dy = 1;
        break;

  }
});
