import Grass from './grass/Grass.js'

var ObjectController = {
  genarateObject : (x,y) => {
    console.log(x + " " + y);
    return new Grass(x,y)
  }
}

export default ObjectController
