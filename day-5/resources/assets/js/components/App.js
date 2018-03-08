import React from 'react'
import Item from './Item'
import Axios from 'axios'

class App extends React.Component{
  constructor() {
    super()
    this.state = {
      item : [],
      inputValue : "",
    }
    this.addItem = this.addItem.bind(this)
    this.updateInputValue = this.updateInputValue.bind(this)
    this.deletItem = this.deleteItem.bind(this)
    this.doneItem = this.doneItem.bind(this)
  }

  componentDidMount() {
      // get default data
      Axios.get('/viewdata').then( (val)=>{
        val.data.map((new_item) => {
            this.setState( {item: [...this.state.item, { id: new_item.id , item : new_item.item , done : new_item.done } ]} )
        })
      }).catch( (error)=>{
        console.log(error);
      })
  }

  updateInputValue(evt) {
    this.setState({inputValue : evt.target.value})
  }

  deleteItem(Iid) {
    var URL = '/deleteItem/' + Iid
    // AXIOS DELETE
    Axios.get(URL).then().catch()
    var result = (this.state.item.filter( (item) => parseInt(Iid)!==parseInt(item.id) ))
    this.setState({ item: result})
  }

  doneItem(Iid) {
    var URL = '/doneItem/' + Iid
    // AXIOS DONE
    Axios.get(URL).then().catch()
    var result = this.state.item.map((item) => {
      if(parseInt(item.id)===parseInt(Iid)){
        if(item.done===1) {
          item.done= 0;
        }
        else {
          item.done= 1;
        }
      }
      return item;
    })
    this.setState({item : result})
  }

  addItem() {
    var URL = '/addItem/' + this.state.inputValue
    Axios.get(URL).then( (data)=> {
      this.state.item.push( { id: data.data , item : this.state.inputValue , done : 0} )
      this.setState({inputValue : ''})
    }).catch( (err)=>{
      console.log(err);
    })
  }

  render() {
    var items = this.state.item.map((item , key) => {
      return (<div key={key}>
                <Item id={item.id} done={item.done} name={item.item} doneItem={this.doneItem.bind(this)} delete={this.deleteItem.bind(this)}/>
              </div>)
    })
    return (<div className="container text-center">
                <h1>'TODO LIST'</h1>
                {items}
                <input value={this.state.inputValue} onChange={this.updateInputValue}></input>
                <button onClick={() => this.addItem()}>ADD</button>
            </div>)
  }
}

export default App;
