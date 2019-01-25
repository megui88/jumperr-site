<template>
    <div id="section_footer">
        <footer>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3 text-center">
                        <router-link to="/">
                            <a><img alt="img-logo" src="/images/logo/logojumperrwhite.svg" width="200px"></a>
                        </router-link>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 d-none d-md-flex enlaces mx-auto">
                        <template v-for="item in routes">
                                <router-link class="" :to="item.link" class="text-uppercase">{{ item.name }}</router-link>
                        </template>
                    </div>
                    <div class="col-12 col-md-3 text-center mt-4 mt-md-0">
                        <a href="https://www.facebook.com/wearejumperr/" rel="noopener noreferrer" target="_blank">
                            <img alt="Facebook" class="d-inline-block mx-2" src="/images/iconos/001-facebook.svg"
                                 width="36px">
                        </a>
                        <a href="https://www.instagram.com/wearejumperr/" rel="noopener noreferrer" target="_blank">
                            <img alt="Instagram" class="d-inline-block mx-2" src="/images/iconos/002-instagram.svg"
                                 width="36px">
                        </a>
                        <a href="https://www.linkedin.com/company/wearejumperr/" rel="noopener noreferrer" target="_blank">
                            <img alt="Linkedin" class="d-inline-block mx-2" src="/images/iconos/003-linkedin.svg"
                                 width="36px">
                        </a>
                        <!-- <a href="#" rel="noopener noreferrer" target="_blank">
                            <img alt="Youtube" class="d-inline-block mx-2" src="/images/iconos/004-youtube.svg"
                                 width="36px">
                        </a> -->
                    </div>
                </div>
            </div>

        </footer>
        <div class="power-by-jumperr d-flex align-items-end pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 text-center text-md-left">
                        <a href="/" rel="noopener noreferrer" target="_blank">
                            {{ $store.getters.getTags({ tag: 'footer_jumperr' }) }}
                        </a>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-right">
                        <a href="#" rel="noopener noreferrer" target="_blank">
                            <!-- Politica de privacidad | Terminos y condiciones -->
                            {{ $store.getters.getTags({ tag: 'footer_polity' }) }} | {{ $store.getters.getTags({ tag: 'footer_terms' }) }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'footer-jumperr',
        computed: {
            routes() {
                return [
                        { name: this.$store.getters.getTags({ tag: 'general_btn_home' }), link: '/'},
                        { name: this.$store.getters.getTags({ tag: 'general_btn_company' }), link: '/la-compagnia'},
                        { name: this.$store.getters.getTags({ tag: 'general_btn_especialities' }), link: '/specialita'},
                        // { name: this.$store.getters.getTags({ tag: 'partners_title12' }), link: '/blog'},
                        { name: this.$store.getters.getTags({ tag: 'partners_titulo' }), link: '/partners'},
                        { name: this.$store.getters.getTags({ tag: 'careers_titulo' }), link: '/labori'}
                    ]
            }
        },
    }
    
</script>
<style scoped>
    #section_footer {
        position: relative;
        z-index: 1;
    }

    footer {
        position: relative;
        background-image: url('/images/home/imagenes/footerr_tapaprincipal.svg');
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
        height: 480px;
        width: 100%;
        display: flex;
        align-items: flex-start;
        padding-top: 126px;
    }

    footer:before {
        content: ' ';
        background-color: transparent;
        background-image: url('/images/home/imagenes/footerr_ultimatapa.svg');
        background-size: cover;
        background-position: center top;
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 0px;
        left: 0px;
        z-index: -1;
    }

    .power-by-jumperr {
        background-image: url('/images/home/imagenes/footerr_1.svg');
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
        position: absolute;
        bottom: 0px;
        left: 0px;
        width: 100%;
        height: 200px;
    }

    @media (max-width: 768px) {
        footer {
            position: relative;
            background-image: url('/images/home/imagenes/2_movil.svg');
            background-size: cover;
            background-position: center top;
            background-repeat: no-repeat;
            height: 480px;
            width: 100%;
            display: flex;
            align-items: flex-start;
            padding-top: 100px;
        }

        footer:before {
            content: ' ';
            background-color: transparent;
            background-image: url('/images/home/imagenes/3_movil.svg');
            background-size: cover;
            background-position: center top;
            width: 100%;
            height: 100%;
            position: absolute;
            bottom: 0px;
            left: 0px;
            z-index: -1;
        }

        .power-by-jumperr {
            background-image: url('/images/home/imagenes/1_movil.svg');
            background-size: cover;
            background-position: center top;
            background-repeat: no-repeat;
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 200px;
        }
    }

    @media (max-width: 400px) {
        footer {
            position: relative;
            background-image: url('/images/home/imagenes/2_movil.svg');
            background-size: cover;
            background-position: center bottom;
            background-repeat: no-repeat;
            height: 450px;
            width: 100%;
        }

        footer:before {
            content: ' ';
            background-color: transparent;
            background-image: url('/images/home/imagenes/3_movil.svg');
            background-size: cover;
            background-position: center bottom;
            width: 100%;
            height: 100%;
            position: absolute;
            bottom: 0px;
            left: 0px;
            z-index: -1;
        }

        .power-by-jumperr {
            background-image: url('/images/home/imagenes/1_movil.svg');
            background-size: cover;
            background-position: center bottom;
            background-repeat: no-repeat;
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 180px;
        }
    }

    .power-by-jumperr a {
        font-weight: 700;
    }

    a, a:hover, a:link, a:focus {
        color: #fff;
        text-decoration: none;
    }

    .enlaces {
        display: flex;
        flex-wrap: wrap;
    }

    .enlaces a {
        display: inline-block;
        width: 50%;
        font-weight: 500;
        line-height: 2.5;
    }
</style>
