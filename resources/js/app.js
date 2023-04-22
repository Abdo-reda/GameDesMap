import './bootstrap';
import {createApp} from 'vue'
import {createRouter, createWebHashHistory, createWebHistory} from 'vue-router'; 
import routes from './routes';
import App from '../components/App.vue';
import D3Network from 'vue3-d3-network';

const vueRouter = createRouter({
    history: createWebHashHistory(), //Adds # in routes to differentiate between client & server side routing.
    routes: routes, 
})

const app = createApp(App); 
app.use(vueRouter);
app.component('D3Network', D3Network);
app.mount("#app");