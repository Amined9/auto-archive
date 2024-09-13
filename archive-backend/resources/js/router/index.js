import { createRouter, createWebHistory } from 'vue-router';
import Car from '../components/Car.vue';
import App from '../pages/App.vue';

const routes = [
    {
        path: '/car',
        name: 'Car',
        component: Car
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
