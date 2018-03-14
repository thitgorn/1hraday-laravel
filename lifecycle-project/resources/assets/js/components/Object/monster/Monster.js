import HandleMove from '../util/HandleMove'
import HandleBoundMap from '../util/HandleBoundMap'

function Monster(x,y) {
  this.x = x;
  this.y = y;
  this.size = 1;
  this.life = 2;
  this.atk = 1;
  this.name = "Monster"
  this.move = function(maxX,maxY) {
    // move by direction
    var move = HandleMove.getMove(this.direction)
    this.x += move.x
    this.y += move.y
    // get new Direction
    var newDir = HandleBoundMap.getDirection(this.direction , this.x , this.y , this.size , maxX , maxY)
    if(newDir != this.direction) {
      switch (this.direction) {
        case 1:
            var fix = HandleMove.getMove(5)
            this.x += fix.x
            this.y += fix.y
            break
        case 3:
            var fix = HandleMove.getMove(7)
            this.x += fix.x
            this.y += fix.y
            break
        case 5:
            var fix = HandleMove.getMove(1)
            this.x += fix.x
            this.y += fix.y
            break
        case 7:
            var fix = HandleMove.getMove(3)
            this.x += fix.x
            this.y += fix.y
            break
      }
      this.direction = newDir
    }

  }
  this.attack = function(target){
    // if(target.name!=="Monster"){
      target.isAttacked(this)
      if(target.life<=0) {
        this.life = 2;
        this.size += (target.size / this.size);
      }
    // }
  }
  this.isAttacked = function(from) {
    if(this.size <= from.size) {
      this.life -= from.atk
      this.direction = HandleBoundMap.getNewDirection(this.direction)
    }
  }
}

export default Monster
