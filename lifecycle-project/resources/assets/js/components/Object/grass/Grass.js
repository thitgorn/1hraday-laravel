function Grass(x,y) {
  this.x = x;
  this.y = y;
  this.size = 1;
  this.life = 1;
  this.atk = 0;
  this.name = "Grass"
  this.move = function(maxX,maxY) {
    // do nothing
  }
  this.attack = function(target){
    // not attack anyone
  }
  this.isAttacked = function(from) {
    this.life -= from.atk
  }
}

export default Grass
