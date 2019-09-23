import React, { setState } from 'react';
import { withRouter } from 'react-router';
import { LoginService } from '../services/LoginService';
import { Input, DivInput } from '../style/LoginStyle';

class LoginComponent extends React.Component {
  state = {
    login: false,
    email: '',
    password: ''
  }

  login = () => {
    this.setState({ login: true })
  }

  render() {
    if (this.state.login) {
      return <LoginService login={true} email={this.state.email} password={this.state.password} />
    }

    return (
      <DivInput>
        <Input type="text" placeholder="email" maxLength="100" onChange={event => this.setState({ email: event.target.value })} /> <br /><br />
        <Input type="password" placeholder="password" maxLength="100" onChange={event => this.setState({ password: event.target.value })} /> <br /><br />
        <button onClick={this.login}>Submit</button>
      </DivInput>
    )
  }
}

export default withRouter(LoginComponent);
