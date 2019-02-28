import React, { Component } from 'react';
import { withRouter, Route, Link } from 'react-router-dom';
import Login from './Login';
import Test from './Test';


class App extends Component {
  render() {
    return (
      <div>
        <Link to="/">Login</Link> <br />
        <Link to="/test">Test</Link>
        <Route path="/" exact strict component={Login}/>
        <Route path="/test" exact strict component={Test}/>
      </div>
    );
  }
};

export default withRouter(App);