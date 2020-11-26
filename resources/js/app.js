require('./bootstrap');
import Vue from 'vue';
import Buefy from 'buefy';
import Carousel from './vue/buefy/carousel.vue'
import 'buefy/dist/buefy.css';

Vue.use(Buefy);

var App = new Vue({
    el:"#app",
    components: {Carousel}
})
