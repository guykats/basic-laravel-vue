import Vue from "vue";
// import App from "./components/App.vue";
import Axios from 'axios';
import router from "./router";

import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";

Vue.config.productionTip = false;

Vue.component('app', () => import('./components/App.vue'));
Vue.component('navigation', () => import('./components/Navigation.vue'));



// new Vue({
//   router,
//   render: h => h(App)
// }).$mount("#app");
new Vue({
   router,
    el: '#app',
});
