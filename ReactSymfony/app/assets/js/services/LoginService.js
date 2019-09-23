import React from 'react';
import axios from 'axios';

export class LoginService extends React.Component {
  login = () => {
    const user = {
      _username: this.props.email,
      _password: this.props.password
    }

    axios.post(`http://localhost/login`, { user })
      .then(res => {
        console.log(res);
        console.log(res.data)
      })
  }

  render() {
    if (this.props.login) {
        this.login()
    }

    return (
        <p>Loging in...</p>
    )
  }
}
