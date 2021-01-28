import Vue from 'vue';

//import ExampleComponent from './components/ExampleComponent';
//import TestComponent from './components/TestComponent';


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('test-component', require('./components/TestComponent.vue').default);


const app = new Vue({
    el: '#app',
    /*components: {
        'example-component': ExampleComponent,
        'test-component': TestComponent
    }*/
});

require('./bootstrap');

require('alpinejs');


