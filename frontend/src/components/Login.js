import React from 'react';
import { connect } from 'react-redux';
import { increaseCount } from '../actions';

class Login extends React.Component {
  render() {
    return (<div>
      <h1>login!</h1>
      {this.props.count} <br />
      <button onClick={this.props.increaseCount}> przycisk </button>
    </div>);
  }
}

function mapStateToProps (state) {
  return {
    count: state.sth.count,
  };
}

function mapDispatchToProps(dispatch) {
  return {
    increaseCount: () => dispatch(increaseCount())
  };
}

export default connect(mapStateToProps, mapDispatchToProps)(Login);