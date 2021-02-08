import Vue from 'vue';

Vue.component('navigation-component', require('./components/Navigation.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
Vue.component('slider-component', require('./components/Slider.vue').default);
Vue.component('contact-component', require('./components/Contact.vue').default);
Vue.component('about-component', require('./components/About.vue').default);
Vue.component('metric-component', require('./components/Metric.vue').default);
Vue.component('contact-form-component', require('./components/ContactForm.vue').default);


const app = new Vue({
    el: '#app',
    data () {
        return {
          toggle: false,
          toggleIssues: false
        }
    }
});

require('./bootstrap');

require('alpinejs');


