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
    if(this.running){
      this.objects.forEach((item) => {
          item.move(this.width , this.height)

          var enemy = []
          this.objects.forEach((ob) => {
            // IF item hit ob
            // rect1 as item
            // rect2 as ob
            if(item.x < ob.x + ob.size &&
               item.x + item.size > ob.x &&
               item.y < ob.y + ob.size &&
               item.size + item.y > ob.y) {
              enemy.push(ob)
            }
          })
          if(enemy.length>=2) {
            for(var i = 0 ; i < enemy.length ; i++) {
              for(var j = 0 ; j < enemy.length ; j++) {
                if(j===i){
                  continue;
                }
                enemy[i].attack(enemy[j])
              }
            }
          }

        }
      )
      this.objects = this.objects.filter((item) => (parseInt(item.life) > 0))
      this.objects.forEach((item) => {
        if(item.size >= this.width/3) {
          this.width *= 2;
          this.height *= 2;
        }
      })
    }
    // console.log(this.objects);
  },start: function() {
    this.running = true
    // this.createObject()
    setInterval(()=>{ this.createObject()},128)
    setInterval(()=>{ this.move()},44)
  },
  stop: function() {
    this.running = false
  },

}

export default Controller
