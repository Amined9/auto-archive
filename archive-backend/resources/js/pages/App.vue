<template>
    <div>
        <Navbar/>
        <Car></Car>
        <router-view></router-view> <!-- C'est ici que les composants vont s'afficher -->
    </div>
</template>

<script>
import Car from '../components/Car.vue';
import Navbar from '../components/Navbar.vue';

export default {
    name: 'App',
};
</script>

<style scoped>
h1 {
    color: #42b983;
}
</style>
