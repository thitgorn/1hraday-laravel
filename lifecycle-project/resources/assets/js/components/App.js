import React from 'react'
import ReactDOM from 'react-dom'

// This class need to call only GUI
class App extends React.Component {
  componentDidMount() {
    // create Controller
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
