<template>
    <div id="section_bio">
        <article class="fondo d-flex py-4">
            <div class="container align-self-center">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <h3 class="title-border-bottom">{{ $store.getters.getTags({ tag: 'home_text8' }) }}</h3>
                        <p v-html="$store.getters.getTags({ tag: 'home_text10' })"></p>
                    </div>
                </div>
            </div>
        </article>
        <img class="img-1" src="/images/iconos/circulowhite.svg" alt="elemento jumperr">
        <img class="img-2" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
        <img class="img-3" src="/images/iconos/circulogrueso.svg" alt="elemento jumperr">
        <img class="img-4" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
        <div class="circle-pulse"></div>
    </div>
</template>
<script>
    export default {
        name: 'home-bio'
    }
</script>
<style scoped>
    #section_bio {
        z-index: 1000;
        position: relative;
    }

    .fondo {
        background-color: #000;
        background-image: url('/images/home/imagenes/jumperr-teofrecemos-home.png');
        background-attachment: fixed;
        -webkit-background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width: auto;
        height: 100%;
        min-height: 560px;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1rem 0rem 1.1rem;
    }

    h3, p {
        color: #fff;
    }

    p {
        font-size: 1.2rem;
    }





    .img-1 {
        position: absolute;
        top: -60px;
        right: -55px;
        left: auto;
        display: inline-block;
        width: 120px;
        height: 120px;
        animation: rotarRight 3s linear infinite;
    }

    .img-2 {
        position: absolute;
        top: 90px;
        right: 10px;
        left: auto;
        display: inline-block;
        width: 20px;
        height: 20px;
        animation: rotarRight 6s linear infinite;
    }

    .img-3 {
        position: absolute;
        bottom: -60px;
        right: -40px;
        display: inline-block;
        width: 120px;
        height: 120px;
        animation: rotarRight 3s linear infinite;
    }

    .img-4 {
        position: absolute;
        bottom: -70px;
        right: 70px;
        display: inline-block;
        width: 20px;
        height: 20px;
        animation: pulso 1s linear infinite;
    }

    .circle-pulse {
        position: absolute;
        bottom: 200px;
        right: 10px;
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

    @keyframes rotarRight {
        0% {
            transform: translatey(0px);
            opacity: 1;
        }
        50% {
            opacity: .5;
            transform: translatey(-20px);
        }
        100% {
            transform: translatey(0px);
            opacity: 1;

        }
    }

    @keyframes pulso {
        0% {
            transform: scale(1, 1);
        }
        35% {
            transform: scale(1.05, 1.05);
        }
        75% {
            transform: scale(1.1, 1.1);
        }
        100% {
            transform: scale(1, 1);
        }
    }

    @media (min-width: 992px) {
        .img-1 {
            position: absolute;
            top: 50px;
            right: auto;
            left: -50px;
            display: inline-block;
            width: 120px;
            height: 120px;
            animation: rotarRight 5s linear infinite;
        }

        .img-2 {
            position: absolute;
            top: 180px;
            right: auto;
            left: 25px;
            display: inline-block;
            width: 20px;
            height: 20px;
            animation: pulso 1s linear infinite;
        }

        .circle-pulse {
            position: absolute;
            bottom: 80px;
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
    }
</style>
