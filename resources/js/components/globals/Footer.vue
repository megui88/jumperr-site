<template>
<div id="section_footer">

    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-3 text-center">
                    <a href="#">
                        <img src="/images/logo/logojumperrwhite.svg" alt="" width="200px">
                    </a>
                </div>
                <div class="col-12 col-md-5 col-lg-4 d-none d-md-flex enlaces mx-auto">
                    <a href="#">{{ $store.getters.getTags({ tag: 'general_btn_company' }) }}</a>
                    <a href="#">{{ $store.getters.getTags({ tag: 'general_btn_especialities' }) }}</a>
                    <a href="#">{{ $store.getters.getTags({ tag: 'general_btn_agencies' }) }}</a>
                    <a href="#">{{ $store.getters.getTags({ tag: 'general_btn_contact' }) }}</a>
                    <a href="#">Jumperr Start</a>
                    <a href="#">{{ $store.getters.getTags({ tag: 'home_title5' }) }}</a>
                    <a href="#">{{ $store.getters.getTags({ tag: 'home_title7' }) }}</a>
                    <a href="#">{{ $store.getters.getTags({ tag: 'home_title3' }) }}</a>
                </div>
                <div class="col-12 col-md-3 text-center mt-4 mt-md-0">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img class="d-inline-block mx-2" width="36px" src="/images/iconos/001-facebook.svg" alt="Facebook">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img class="d-inline-block mx-2" width="36px" src="/images/iconos/002-instagram.svg" alt="Instagram">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img class="d-inline-block mx-2" width="36px" src="/images/iconos/003-linkedin.svg" alt="Linkedin">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img class="d-inline-block mx-2" width="36px" src="/images/iconos/004-youtube.svg" alt="Youtube">
                    </a>
                </div>
            </div>
        </div>

    </footer>
    <div class="power-by-jumperr d-flex align-items-end pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        © Jumperr Digital Company
                    </a>
                </div>
                <div class="col-12 col-md-6 text-center text-md-right">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        Politica de privacidad | Terminos y condiciones
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    export default {
        name: 'footer'
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
