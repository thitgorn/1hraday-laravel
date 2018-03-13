import Setting from '../../settings'

import ObjectController from '../Object/ObjectController'

// Controller must be only one
var Controller = {
  // attribute
  width: Setting.width,
  height: Setting.height,
  objects: [],
  running: false,
  // create new and return list of object
  createObject: function() {
    if(!this.running) return this.objects
    var width = Math.floor((Math.random() * this.width));
    var height = Math.floor((Math.random() * this.height));
    this.objects.push(ObjectController.genarateObject(width,height))
    return this.objects
  },
  move: function() {
    if(!this.running) return
    this.objects.forEach((item) => {
      item.move()}
    )
  },
  start: function() {
    this.running = true
    setInterval(()=>{ this.createObject()},4000)
    setInterval(()=>{ this.move()},1000)
  },
  stop: function() {
    this.running = false
  },

}

export default Controller
