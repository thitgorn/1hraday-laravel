import React from 'react'

class Item extends React.Component {
  render() {
    return (<div className="container">
              <div className="row">
                <div className="col-md-8">
                  {this.props.done == '0'? <span><strike>{this.props.name}</strike></span> : <span>{this.props.name}</span>}
                </div>
                <div className="col-md-4">
                  <span onClick={()=>{this.props.doneItem(this.props.id)}}>{this.props.done == '0'? 'Done' : 'NotDone'} </span>
                  <span onClick={()=>{this.props.delete(this.props.id)}}>delete</span>
                </div>
              </div>
            </div>)
  }
}

export default Item
