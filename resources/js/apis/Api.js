import axios from "axios";

let Api = axios.create({
  baseURL: "/",
  withCredentials: true
});

Api.defaults.withCredentials = true;


export default Api;
