<template>
    <div>
        <template v-if="isLoading">
            cargando...
        </template>

        <template v-else>
            <nav-bar />
            <router-view />
            <footer />
        </template>
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
            isLoading() {
                return (this.$store.getters.getLanguages === null)
            }
        },
        methods: {}
    }
</script>
