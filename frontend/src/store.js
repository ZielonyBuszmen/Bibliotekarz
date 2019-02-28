import { createStore, applyMiddleware } from 'redux';
import reducer from './reducers';
import thunk from 'redux-thunk';


export const initialStoreState = {
  sth: {
    count: 0,
  },
};

export const store = createStore(
  reducer,
  initialStoreState,
  applyMiddleware(thunk)
);