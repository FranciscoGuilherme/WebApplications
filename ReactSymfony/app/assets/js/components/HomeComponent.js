import React from 'react';
import { withRouter } from "react-router";
import { Link } from 'react-router-dom';

class HomeComponent extends React.Component {
  render() {
    return (
      <div className="links">
          <Link to="/" className="link">Home</Link>
          <Link to="/about" className="link">About</Link>
      </div>
    )
  }
}

export default withRouter(HomeComponent);
