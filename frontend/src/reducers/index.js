
import { combineReducers } from "redux";
import { sthReducer } from './sthReducer';

export default combineReducers({
  sth: sthReducer,
});
