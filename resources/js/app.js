require('./bootstrap');

import Vue from 'vue';

Vue.component('add-product',  require('./components/products/AddProduct').default);

import store from "./store";

const app = new Vue({
    el: '#app',
    store
});
