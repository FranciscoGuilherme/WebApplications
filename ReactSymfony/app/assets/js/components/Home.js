import React, { Component } from 'react';
import { withRouter } from "react-router";

class Home extends Component {
  render() {
    return (
      <div>
        <p>Ola</p>
      </div>
    )
  }
}

export default withRouter(Home);
