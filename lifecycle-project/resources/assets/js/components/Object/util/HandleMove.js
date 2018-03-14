var HandleMove = {
  // return { x: value , y : value}
  getMove : function(direction) {
    switch(direction) {
      case 1:
              return { x : -1 , y : -1 }
      case 2:
              return { x : -1 , y : 0 }
      case 3:
              return { x : -1 , y : 1 }
      case 4:
              return { x : 0 , y : 1 }
      case 5:
              return { x : 1 , y : 1 }
      case 6:
              return { x : 1 , y : 0 }
      case 7:
              return { x : 1 , y : -1 }
      case 8:
              return { x : 0 , y : -1 }
    }
  }
}

export default HandleMove;
