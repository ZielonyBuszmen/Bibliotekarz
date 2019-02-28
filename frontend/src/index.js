import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import { HashRouter as Router } from 'react-router-dom'
import { store } from './store';
import App from './components/App';

const Root = () =>
  <Provider store={store}>
    <Router basename={process.env.PUBLIC_URL}>
      <App/>
    </Router>
  </Provider>;

ReactDOM.render(<Root/>, document.getElementById('root'));
