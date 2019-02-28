import { createStore } from 'redux';

export const initialStoreState = {
  nic: true
};

export const store = createStore(() => {}, initialStoreState);