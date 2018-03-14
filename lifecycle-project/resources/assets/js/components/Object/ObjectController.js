import Grass from './grass/Grass.js'
import Human from './human/Human.js'
import Monster from './monster/Monster.js'

const allObject = [ Grass , Human , Monster]

var ObjectController = {
  genarateObject : (x,y) => {
    var rand = Math.floor((Math.random() * allObject.length));
    var randX = Math.floor((Math.random() * x));
    var randY = Math.floor((Math.random() * y));
    var ob = new allObject[rand](randX,randY)

    var randDirection = Math.floor((Math.random() * 8) + 1);
    ob.direction = randDirection;
    // ob.direction = 1;
    // ob.x = 10;
    // ob.y = 10;
    return ob
  }
}

export default ObjectController
