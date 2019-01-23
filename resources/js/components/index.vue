<template>
    <div>
        <template v-if="isLoading">
            <div class="container d-flex justify-content-center pt-50vh">
                <clip-loader :loading="isLoading" :color="color" :size="size"/>
            </div>
        </template>

        <template v-else>
            <nav-bar />
            <router-view />
            <footer />
        </template>
    </div>
</template>
<script>
    import { ClipLoader } from 'vue-spinner/dist/vue-spinner.min';
    import NavBar from './globals/NavBar';
    import Footer from './globals/Footer';

    export default {
        components: { ClipLoader, NavBar, Footer },
        data() {
            return {
                color: '#e33d2f',
                size: '40px'
            }
        },
        created() {
            this.$store.dispatch('APIGetAllLanguagesTags');
        },
        computed: {
            isLoading() {
                return (this.$store.getters.getLanguages === null)
            }
        }
    }
</script>
<style scoped>
    .pt-50vh {
        padding-top: 50vh;
    }
</style>
