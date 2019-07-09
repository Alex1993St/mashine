/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import VeeValidate from 'vee-validate';
import VueAxios from 'vue-axios'
import axios from 'axios'
Vue.use(VueAxios, axios);

import ru from 'vee-validate/dist/locale/ru';
import VueI18n from 'vue-i18n';
Vue.use(VueI18n);

const i18n = new VueI18n({
    locale: 'ru'
});

// const locale = html.getAttribute('lang');
// const i18n = new VueI18n({
//     locale: locale || 'en',
//     messages: {}
// });

Vue.use(VeeValidate, {
    i18n,
    dictionary: {
       ru
    }
});

import Vuetify from 'vuetify';
Vue.use(Vuetify);

import VueRouter from 'vue-router';
Vue.use(VueRouter);


// import file
import router from './routes';
import store from './store';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('contact', require('./components/ContactComponent').default);

Vue.component('chat-messages', require('./components/ChatMessages').default);
Vue.component('chat-form', require('./components/ChatForm').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    router,
    store,
    el: '#app',
    data: {
        messages: []
    },

    created(){
        this.fetchMessages();
    },

    methods: {
        fetchMessages(){
            axios.get('/messages').then(response =>{
                this.messages = response.data;
            });

            Echo.private('chat')
                .listen('MessageSent', (e) => {
                    this.messages.push({
                        message: e.message.message,
                        user: e.user
                    });
                });

        },

        addMessage(message){
            this.messages.push(message);

            axios.post('/messages', message).then(response => {
                console.log(response.data);
            })
        }
    }
});
