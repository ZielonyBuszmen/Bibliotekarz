import { INCREASE_COUNTER } from '../reducers/sthReducer';

export const sth = (payload) => ({
  type: 'STH',
  payload
});

// opóźnienie wywołania o 500 ms
export function increaseCount() {
  return (dispatch) => {
    setTimeout(()=> {
      dispatch({
        type: 'INCREASE_COUNTER',
      })
    }, 500);

  };
}