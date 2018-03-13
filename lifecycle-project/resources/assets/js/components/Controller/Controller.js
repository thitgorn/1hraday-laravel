import Setting from '../settings'

import ObjectController from '../Object/ObjectController'

// Controller must be only one
var Controller = {
  // attribute
  width: Setting.width,
  height: Setting.height,
  objects: [],
  // create new and return list of object
  createObject: function() {
    object.push(ObjectController.genarateObject())
    return objects
  },

}

export default Controller
