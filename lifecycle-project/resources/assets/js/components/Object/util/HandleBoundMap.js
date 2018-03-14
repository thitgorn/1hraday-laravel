var HandleBoundMap = {
  // return new direction if hit map
  // otherwise return same direction
  getDirection : function(direction , x , y , size , maxX , maxY){
    // if hit
    if(((x+size) >= maxX) || ((y+size) >= maxY) || (x <= 0) || (y <=0)) {
      var newdir = this.getNewDirection(direction)
      return newdir;
    }
    // not hit
    return direction
  } ,

  getNewDirection : function(direction) {
    var rand = Math.floor((Math.random() * 5))
    var newDirection = direction + 3 + rand
    if(newDirection > 8)
        newDirection = newDirection % 8
    return newDirection
  }
}

export default HandleBoundMap
