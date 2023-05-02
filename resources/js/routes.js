import Home from '../components/Home.vue';
import About from '../components/About.vue';
import MapList from '../components/MapList.vue';

 export default [
    {
        path: '/',
        component: Home,
    },
    {
        path: '/about',
        component: About,
    },
    {
        path: '/map-list',
        component: MapList,
    },
];

