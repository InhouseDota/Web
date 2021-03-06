
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import Buefy from 'buefy';
import 'buefy/lib/buefy.css';

Vue.use(Buefy);

Vue.prototype.$bus = new Vue({}); // Global event bus
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('player-page', require('./components/PlayerPage.vue'));
Vue.component('modal', require('./components/Modal.vue'));
Vue.component('ticker-tape', require('./components/TickerTape.vue'));
Vue.component('countdown-timer', require('./components/CountdownTimer.vue'));


const app = new Vue({
    el: '#app'
});
