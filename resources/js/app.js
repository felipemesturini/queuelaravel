require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex';
import VueResource from 'vue-resource';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

import './directives/Transform';
Vue.use(Vuex);
Vue.use(VueResource);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

// window.Vue = require('vue').default;
// import Vuex from 'vuex';
//Vue.use(require('vuex').default);

Vue.component('galery-component', require('./components/GaleryComponent.vue').default);
Vue.component('panel-component', require('./components/shared/Panel.vue').default);
Vue.component('image-table', require('./components/ImageTable.vue').default);

const app = new Vue({
    el: '#app',
});

console.log(app);
