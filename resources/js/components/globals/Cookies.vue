<template>
    <cookie-law :buttonText="$store.getters.getTags({ tag: 'cookies_btn' })" position="bottom" theme="jumperr" buttonClass="btn btn-primary btn-sm">
        <div class="text-center" slot="message">
            {{ $store.getters.getTags({ tag: 'cookies_text' }) }}
            <router-link to="/cookiespolicies">{{ $store.getters.getTags({ tag: 'cookies_link' }) }}</router-link>
        </div>
    </cookie-law>
</template>
<script>
    import CookieLaw from 'vue-cookie-law';

    export default {
        name: 'cookies',
        components: { CookieLaw }
    };
</script>
<style scoped>
    .Cookie--jumperr {
        background: rgba(21, 20, 20, 0.58);
        color: #FFF;
        padding: 0.8em;
        font-size: 0.88em;
    }
</style>
