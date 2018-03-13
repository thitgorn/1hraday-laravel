import React from 'react'
import ReactDOM from 'react-dom'

import Controller from './Controller/Controller'

// This class need to call only GUI
class App extends React.Component {
  componentDidMount() {
    // create Controller
    var controller = Controller;
    controller.createObject()
    controller.start()
    // create GUI
  }
  render() {
    return (<div>Life Cycle Project</div>)
  }
}

export default App

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
