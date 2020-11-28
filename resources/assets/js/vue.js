// * Import thư viện VueRouter với Vue.use()
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// * Import các component 
import App from '../js/views/App' 
import Book from '../js/views/Book' 
import Author from '../js/views/Author' 

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'book',
            component: Book,
        },
        {
            path: '/author',
            name: 'author',
            component: Author,
        },
    ],
});

// * Truyền route constant router vào ứng dụng Vue mới để có thể access đến this.$router và this.$route

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});