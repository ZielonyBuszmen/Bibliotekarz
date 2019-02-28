import { DATA_LOADED, INCREASE_COUNTER, LOADING, LOADING_FAILED } from '../reducers/sthReducer';

export const sth = (payload) => ({
  type: 'STH',
  payload
});

// opóźnienie wywołania o 500 ms
export function increaseCount() {
  return (dispatch) => {
    setTimeout(() => {
      dispatch({
        type: 'INCREASE_COUNTER',
      })
    }, 500);

  };
}


export function loading() {
  return {
    type: LOADING
  }
}

export function dataLoaded(data) {
  return {
    type: DATA_LOADED,
    data,
  };
}

export function loadedFailed(error) {
  return {
    type: LOADING_FAILED,
    error,
  };
}


// testowe pobranie danych przez thunki

export function getThunkData() {
  return (dispatch) => {
    dispatch(loading());

    fetch('http://localhost:8080/backend/routing_list')
      .then(response => response.json())
      .then(data => {
        dispatch(dataLoaded(data))
      })
      .catch(error => {
        dispatch(loadedFailed(error))
      })
  }
}
