require('lang.js');

import Vue from 'vue';
import VueLang from '@eli5/vue-lang-js'
import translations from './vue-translations.js';

Vue.use(VueLang, {
    messages: translations, // Provide locale file
    locale: 'sr', // Set locale
    fallback: 'sr' // Set fallback lacale
});

Vue.component('front-page-content', require('./components/FrontPageContent.vue').default);
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


