/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.Vue = require("vue");

import "./bootstrap";
import Vue from "vue";
import Routes from "@/js/routes.js";
import App from "@/js/views/App";
import VueElementLoading from 'vue-element-loading';
import VueFlashMessage from 'vue-flash-message';
import VuejsDialog from 'vuejs-dialog';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component("header-bar", require("@/js/components/Header.vue").default);
Vue.component("footer-bar", require("@/js/components/Footer.vue").default);
Vue.component('VueElementLoading', VueElementLoading);
Vue.component('passport-clients', require('@/js/components/passport/Clients.vue').default);
Vue.component('passport-authorized-clients', require('@/js/components/passport/AuthorizedClients.vue').default);
Vue.component('passport-personal-access-tokens', require('@/js/components/passport/PersonalAccessTokens.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueFlashMessage, {
        messageOptions: {
            timeout: 2500,
            pauseOnInteract: true
        }
    });

Vue.use(VuejsDialog,{
        okText: 'Ya',
        cancelText: 'Batal',
        backdropClose: true
    });

const app = new Vue({
    el: "#app",
    router: Routes,
    render: h => h(App)
});

export default app;
