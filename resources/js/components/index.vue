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
            <footer-jumperr />
        </template>
    </div>
</template>
<script>
    import { ClipLoader } from 'vue-spinner/dist/vue-spinner.min';
    import NavBar from './globals/NavBar';
    import FooterJumperr from './globals/Footer';

    export default {
        components: { ClipLoader, NavBar, FooterJumperr },
        data() {
            return {
                color: '#f26336',
                size: '50px'
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
