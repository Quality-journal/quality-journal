import Vue from 'vue';

Vue.component('main-content', require('./components/MainContent.vue').default);
Vue.component('navigation-component', require('./components/Navigation.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
Vue.component('slider-component', require('./components/Slider.vue').default);
Vue.component('contact-component', require('./components/Contact.vue').default);
Vue.component('about-component', require('./components/About.vue').default);
Vue.component('manual-component', require('./components/Manual.vue').default);


const app = new Vue({
    el: '#app',
});

require('./bootstrap');

require('alpinejs');


