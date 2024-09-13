<template>
    <div class="h-screen">
        <Navbar></Navbar>
        <div class="flex flex-row">
            <Sidebar @show="showComponent" @hide="hideAll" ></Sidebar>
            <Car v-if="visibleComponent === 'car'" />
            <p class="ml-96 mt-20 ">Composant affiché : {{ visibleComponent || 'Aucun' }}</p>
        </div>
        <router-view></router-view> <!-- C'est ici que les composants vont s'afficher -->
    </div>
</template>

<script>
import Car from '../components/Car.vue';
import Navbar from '../components/Navbar.vue';
import Sidebar from '../components/Sidebar.vue';


export default {
    name: 'App',
    components:
    {
        Car,
        Navbar,
        Sidebar
    },
    data() {
        return {
            visibleComponent: null, // Variable pour suivre quel composant est visible
        };
    },
    methods: {
        showComponent(component) {
            this.visibleComponent = component; // Met à jour la variable pour afficher le composant souhaité
        },
        hideAll() {
            this.visibleComponent = null; // Masque tous les composants
        },
    },
};
</script>

<style scoped>

</style>
