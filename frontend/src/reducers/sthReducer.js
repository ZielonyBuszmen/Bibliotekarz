import { initialStoreState } from '../store';

export const STH_ACTION = 'STH_ACTION';
export const INCREASE_COUNTER = 'INCREASE_COUNTER';
export const LOADING = 'LOADING';
export const DATA_LOADED = 'DATA_LOADED';
export const LOADING_FAILED = 'LOADING_FAILED';

export const sthReducer = (state = [], action) => {
  switch (action.type) {
    case STH_ACTION:
      return { ...state, payload: action.payload };
    case INCREASE_COUNTER:
      return { ...state, count: ++state.count };
    case LOADING:
      return { ...state, isLoading: true, data: '', error: '' };
    case DATA_LOADED:
      return { ...state, isLoading: false, isError: false, data: action.data };
    case LOADING_FAILED:
      return { ...state, isLoading: false, isError: true, error: action.error };
    default:
      return state;
  }
};
