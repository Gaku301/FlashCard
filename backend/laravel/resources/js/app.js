/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue').default;

import './bootstrap'
import Vue from 'vue'
import Header from './components/HeaderComponent'
import Footer from './components/FooterComponent'
import MobileMenu from './components/MobileMenuComponent'
import MainMenu from './components/MainMenuComponent'
import Table from './components/TableComponent'
import Show from './components/ShowComponent'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('mobilemenu-component', require('./components/MobileMenuComponent.vue').default);
Vue.component('mainmenu-component', require('./components/MainMenuComponent.vue').default);
Vue.component('table-component', require('./components/TableComponent.vue').default);
Vue.component('show-component', require('./components/ShowComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const header = new Vue({
    el: '#header',
    components:{
        Header
    }
});

const footer = new Vue({
    el: '#footer',
    components:{
        Footer
    }
});

const mobileMenu = new Vue({
    el: '#mobileMenu',
    components:{
        MobileMenu
    }
});

const mainMenu = new Vue({
    el: '#mainMenu',
    components:{
        MainMenu
    }
});

const table = new Vue({
    el: '#table',
    components:{
        Table
    }
});

const show = new Vue({
    el: '#show',
    components:{
        Show
    }
});
