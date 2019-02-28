import React from 'react';
import { connect } from 'react-redux';
import { getThunkData, increaseCount } from '../actions';

class Login extends React.Component {

  showPrettyJson(jsonString) {
    return JSON.stringify(jsonString);
  }

  render() {

    const isLoading = this.props.isLoading ? 'Loading...' : null;
    const isData = this.props.isError === false
      ? this.showPrettyJson(this.props.data)
      : this.showPrettyJson(this.props.error);

    return (<div>
      <h1>login!</h1>
      {this.props.count} <br/>
      <button onClick={this.props.increaseCount}> przycisk</button>
      <br/>
      <button onClick={this.props.getThunkData}> pobierz dane</button>
      <hr/>
      {isLoading}
      {isData}
    </div>);
  }
}

function mapStateToProps(state) {
  return {
    count: state.sth.count,
    isLoading: state.sth.isLoading,
    data: state.sth.data,
    error: state.sth.error,
    isError: state.sth.isError,
  };
}

function mapDispatchToProps(dispatch) {
  return {
    increaseCount: () => dispatch(increaseCount()),
    getThunkData: () => dispatch(getThunkData()),
  };
}

export default connect(mapStateToProps, mapDispatchToProps)(Login);