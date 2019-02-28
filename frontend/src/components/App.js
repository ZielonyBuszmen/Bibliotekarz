import React, { Component } from 'react';
import { withRouter, Route } from 'react-router-dom';
import Login from './Login';


class App extends Component {
  render() {
    return (
      <div>
        <Route path="/" exact strict component={Login}/>
      </div>
    );
  }
};

export default withRouter(App);