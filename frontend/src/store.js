import { createStore } from 'redux';
import reducer from './reducers';

export const initialStoreState = {
  sth: {
    count: 0,
  },
};

export const store = createStore(reducer, initialStoreState);