import './bootstrap';
import { createApp } from 'vue';
// Crée un composant Vue principal si ce n'est pas déjà fait
import App from './pages/App.vue'; // Par exemple, si tu as un composant principal
import router from './router'; // Importer le router


// Monte l'application Vue dans un élément avec l'id 'app'

createApp(App)
    .use(router) // Utiliser Vue Router
    .mount('#app');
