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
        components: { NavBar, Footer },
        created() {
            this.$store.dispatch('APIGetAllLanguagesTags');
        },
        computed: {
           /* isLoading() {
                return (this.$store.getters.getLanguagesTagActive.length === 0)
            }*/
        }
    }
</script>
