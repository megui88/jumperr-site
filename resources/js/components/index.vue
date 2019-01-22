<template>
    <div>
        <nav-bar />
        <router-view />
        <footer />
    </div>
</template>
<script>
    import NavBar from './globals/NavBar';
    import Footer from './globals/Footer';

    export default {
        components: { Footer, NavBar },
        data() {
            return {

            }
        }
    }
</script>
