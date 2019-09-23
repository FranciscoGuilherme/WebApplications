import React, { Component } from 'react';
import ReactDom from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import Home from "./components/Home";
import Login from "./components/Login";

class App extends Component {
  render() {
    return (
      <BrowserRouter>
        <div>
          <div className="views">
            <Switch>
              <Route exact path="/" component={ Home }/>
              <Route exact path="/login" component={ Login }/>
              <Route render={ () => <h1>404 Error</h1> } />
            </Switch>
          </div>
        </div>
      </BrowserRouter>
    )
  }
}

ReactDom.render(<App />, document.getElementById('root'));
