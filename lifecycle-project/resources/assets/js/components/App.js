import React from 'react'
import ReactDOM from 'react-dom'

import Controller from './Controller/Controller'

// This class need to call only GUI
class App extends React.Component {
  constructor() {
    super()
    this.state = {
      controller : { objects : []},
      components : (<div>Helloworld</div>)
    }
    this.update = this.update.bind(this)
  }
  componentDidMount() {
    // create Controller
    var controller = Controller;
    controller.createObject()
    controller.start()
    // create GUI
    this.setState( {controller : controller})
    setInterval( () => this.update() , 44)
  }

  update() {
    var x
    var controller = this.state.controller;
    x = <div style={{width : controller.width , height : controller.height , backgroundColor: 'cyan'}}>
    {controller.objects.map((item,id) => {
      var color = 'black'
      switch(item.name) {
        case "Human":
                  color = 'blue'
                  break;
        case "Grass":
                  color = 'green'
                  break
        case "Monster":
                  color = 'red'
                  break;
      }
      return (<div key={id} style={{ position: 'absolute' , width: `${parseInt(item.size)}px` , height: `${parseInt(item.size)}px` , marginTop: `${parseInt(item.x)}px` , marginLeft: `${parseInt(item.y)}px` , backgroundColor: `${color}` }}></div>)
    })}
    </div>
    this.setState( {components : x} )
  }

  render() {
    return (<div>
              <h1>Life Cycle Project</h1>
              {this.state.components}
            </div>)
  }
}

export default App

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
