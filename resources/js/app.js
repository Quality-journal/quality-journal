import Vue from 'vue';

Vue.component('main-content', require('./components/MainContent.vue').default);
Vue.component('navigation-component', require('./components/Navigation.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
Vue.component('slider-component', require('./components/Slider.vue').default);


const app = new Vue({
    el: '#app',
});

require('./bootstrap');

require('alpinejs');


