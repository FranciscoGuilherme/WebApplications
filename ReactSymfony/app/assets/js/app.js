import React from 'react';
import ReactDom from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import HomeComponent from "./components/HomeComponent";
import LoginComponent from "./components/LoginComponent";

class App extends React.Component {
  render() {
    return (
      <BrowserRouter>
        <div>
          <div className="views">
            <Switch>
              <Route exact path="/" component={ HomeComponent }/>
              <Route exact path="/login" component={ LoginComponent }/>
              <Route render={ () => <h1>404 Error</h1> } />
            </Switch>
          </div>
        </div>
      </BrowserRouter>
    )
  }
}

ReactDom.render(<App />, document.getElementById('root'));
