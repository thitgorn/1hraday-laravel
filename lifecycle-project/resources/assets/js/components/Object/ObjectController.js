import Grass from './grass/Grass.js'

var ObjectController = {
  genarateObject : () => {
    return new Grass(10,10)
  }
}

export default ObjectController
