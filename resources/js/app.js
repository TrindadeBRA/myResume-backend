/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import Certificate from './components/Certificate.vue';
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import ResetPassword from './components/ResetPassword.vue';
import NotificationError from './components/notifications/Error.vue';

app.component('certificate', Certificate);
app.component('navbar', Navbar);
app.component('v-footer', Footer);
app.component('login', Login);
app.component('register', Register);
app.component('reset-password', ResetPassword);
app.component('notification-error', NotificationError);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
