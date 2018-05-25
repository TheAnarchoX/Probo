
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

let data = {

};

const app = new Vue({
    el: '#app',
    data: data
});

$(document).ready(function () {

    $('#remember').click(function() {
        if($(this).val() === "Don't Remember Me") {
            $(this).val("Remember Me");
            $(this).toggleClass("remember-me");
        } else {
            $(this).toggleClass("remember-me");
            $(this).val("Don't Remember Me");
        }
    });

    $('.login-input').click(function() {
        if($(this).hasClass('has-error')) {
            $(this).removeClass('has-error');
        }
    });
});