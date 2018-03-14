import HandleMove from '../util/HandleMove'
import HandleBoundMap from '../util/HandleBoundMap'

function Human(x,y) {
  this.x = x;
  this.y = y;
  this.size = 1;
  this.life = 3;
  this.atk = 1;
  this.direction = -1;
  this.name = "Human"
  this.move = function(maxX,maxY) {
    // move by direction
    var move = HandleMove.getMove(this.direction)
    this.x += move.x
    this.y += move.y
    // get new Direction
    this.direction = HandleBoundMap.getDirection(this.direction , this.x , this.y , this.size , maxX , maxY)
  }
  this.attack = function(target){
    if(target.name!=="Human"){
      target.isAttacked(this)
      if(target.life<=0) {
        this.life = 3;
        this.size += (target.size / this.size);
      }
    }
  }
  this.isAttacked = function(from) {
    if(this.size <= from.size) {
      this.life -= from.atk
      this.direction = HandleBoundMap.getNewDirection(this.direction)
    }
  }
}

export default Human
