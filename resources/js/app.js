require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('spinner', require('./components/Spinner.vue').default);

Vue.component('variants', require('./components/store/products/Variants.vue').default);
Vue.component('description', require('./components/store/products/Description.vue').default);

const app = new Vue({
    el: '#app'
});
