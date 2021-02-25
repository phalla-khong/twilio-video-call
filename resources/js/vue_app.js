import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from './views/App';
import {routes} from './routes.js';

const router = new VueRouter({
    mode: 'history',
    routes: routes,
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
