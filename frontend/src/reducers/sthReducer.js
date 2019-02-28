import { initialStoreState } from '../store';

export const STH_ACTION = 'STH_ACTION';
export const INCREASE_COUNTER = 'INCREASE_COUNTER';

export const sthReducer = (state = [], action) => {
  switch (action.type) {
    case STH_ACTION:
      return { ...state, 'payload': action.payload };
    case INCREASE_COUNTER:
      return { ...state, 'count': ++state.count };
    default:
      return state;
  }
};
