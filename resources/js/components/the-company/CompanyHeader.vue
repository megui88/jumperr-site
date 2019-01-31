<template>
    <div>
        <header>
            <div class="grid-container">
                <div class="grid-row">
                    <h2 class="text-white" v-html="$store.getters.getTags({ tag: 'company_text1' })"></h2>
                </div>
            </div>
            <img class="img-float-1" src="/images/iconos/circulo.svg" alt="elemento jumperr">
            <img class="img-float-2" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
        </header>
    </div>
</template>
<script>
    export default {
        name: 'company-header',
    }
</script>
<style scoped>
    header {
        width: 100%;
        min-height: 100vh;
        background-image: url('/images/la-empresa/jumperr_banner_compañia-min.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

    .grid-container {
        max-width: 1140px;
        min-height: 100vh;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        display: grid;
        grid-template-columns: 100%;
    }

    .grid-row {
        display: flex;
        align-items: center;
    }

    h2 {
        line-height: 1.5;
        font-size: 1.4rem;
        font-weight: 300;
        margin-top: 25%;
    }

    h2 strong {
        font-weight: 700;
    }
    @media (min-width: 768px) {
        .grid-container {
            grid-template-columns: 75%;
        }

        h2 {
            line-height: 1.5;
            font-size: 2.4rem;
        }
    }

    @media (min-width: 992px) {
        .grid-container {
            grid-template-columns: 50%;
        }

        h2 {
            line-height: 1.5;
            font-size: 1.88rem;
        }
    }


    /* ANIMACIONES */

    .img-float-1 {
        position: absolute;
        bottom: 100px;
        right: -35px;
        display: inline-block;
        width: 120px;
        height: 120px;
        animation: saltar 10s linear infinite;
    }

    @keyframes opacidad {
        0% {
            transform: rotate(0deg);
            opacity: 1;
        }
        50% {
            opacity: .5;
            transform: rotate(180deg);
        }
        100% {
            transform: rotate(360deg);
            opacity: 1;

        }
    }
    /* Animaciones */
    .img-float-2 {
        position: absolute;
        bottom: 100px;
        left: 35px;
        display: inline-block;
        width: 20px;
        height: 20px;
        animation: saltar 5s linear infinite;
    }

    @keyframes saltar {
        0% {
            transform: translatey(0px);
        }
        50% {
            transform: translatey(-20px);
        }
        100% {
            transform: translatey(0px);
        }
    }
</style>
