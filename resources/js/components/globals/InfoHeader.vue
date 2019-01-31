<template>
    <div id="info_header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a :href="'mailto:' + email ">Email: {{ email }}</a>
                </div>
                <div class="col-6">
                    <nav class="redes_sociales text-right">
                        <template v-for="item in socialMedia">
                            <a :href="item.link" target="_blank" class="pl-2"><i :class="item.icon"></i></a>
                        </template>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'info-header',
        data() {
            return {
                email: 'info@jumperr.com',
                socialMedia: [
                    { link: 'https://www.facebook.com/wearejumperr/', icon: 'fab fa-facebook-f'},
                    { link: 'https://www.instagram.com/wearejumperr/', icon: 'fab fa-instagram'},
                    { link: 'https://www.youtube.com/channel/UCrLWu7ntv8P2AV8I5MlIIkA', icon: 'fab fa-youtube'},
                    { link: 'https://www.linkedin.com/company/wearejumperr/', icon: 'fab fa-linkedin-in'}
                ]
            }
        }
    }
</script>
<style scoped>
    #info_header {
        padding-bottom: 5px;
        padding-top: 5px;
        border-bottom: 1px solid #fff;
    }

    a, a:hover, a:focus, a:active, a:link {
        color: #fff;
        font-weight: 700 !important;
        text-decoration: none;
    }
</style>
