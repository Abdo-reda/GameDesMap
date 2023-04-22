import './bootstrap';
//import '../css/app.css'; 
//require('./bootstrap');
import {createApp} from 'vue'
import {createRouter, createWebHashHistory, createWebHistory} from 'vue-router'; 
import routes from './routes';
import App from '../components/App.vue'

const vueRouter = createRouter({
    history: createWebHashHistory(), //history: createWebHistory(), createWebHashHistory()
    routes: routes, 
})

const app = createApp(App); //createApp({App})
app.use(vueRouter);
app.mount("#app");