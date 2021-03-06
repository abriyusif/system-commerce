require('./bootstrap');

window.Vue = require('vue');

//Import Vue Filter
require('./filter');

//import progressbar
require('./progressbar');

//Setup custom events
require('./customEvents');

//Import View Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//import Sweetalert2
import Swal from 'sweetalert2'
window.Swal = Swal
const Toast = Swal.mixin({
    toast:true,
    position:'top-end',
    showConfirmButton:false,
    timer:3000,
    timerProgressBar:true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter',Swal.stopTimer)
        toast.addEventListener('mouseleave',Swal.resumeTimer)
    }
})
window.Toast

//import v-form
import { Form,HasError,AlertError } from 'vform'
window.Form = Form;
Vue.components(HasError.name,HasError)
Vue.component(AlertError.name,AlertError)

//Routes
import { routes } from './routes';

//Register Routes
const router = new VueRouter({
    routes,
    mode: 'hash',
})


const app = new Vue({
    el:'#app',
    router
})