<template>
    <div id="section_header_carreras">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-7">
                        <h2 class="text-white" v-html="$store.getters.getTags({ tag: 'careers_text1' })"></h2>
                    </div>
                </div>
            </div>
            <div class="circle-pulse"></div>
            <img class="img-float-1" src="/images/iconos/circulo.svg" alt="elemento jumperr">
            <img class="img-float-2" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
        </header>
    </div>
</template>
<script>
    export default {
        name: 'careers-header'
    }
</script>
<style scoped>
    header {
        width: 100%;
        min-height: 100vh;
        background-image: url('/images/carreras/banner-1.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        display: grid;
        align-items: center;
        position: relative;
    }

    /* ANIMACIONES */
    .circle-pulse {
        position: absolute;
        bottom: 280px;
        right: 30px;
        display: block;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: #fff;
        cursor: pointer;
        box-shadow: 0 0 0 rgba(255, 255, 255, 0.4);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
        }
        70% {
            -moz-box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
            box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
        }
        100% {
            -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        }
    }

    .img-float-1 {
        position: absolute;
        bottom: 100px;
        right: -35px;
        display: inline-block;
        width: 120px;
        height: 120px;
        animation: opacidad 5s linear infinite;
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
