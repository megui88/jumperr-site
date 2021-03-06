
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import 'swiper/dist/css/swiper.css';

require('./bootstrap');

window.Vue = require('vue');

/*vuex*/
// import store from './vuex'

import router from './router';

const app = new Vue({
    el: '#app',
    router,
    // store
});
