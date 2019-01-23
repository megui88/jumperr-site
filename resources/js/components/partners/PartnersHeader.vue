<template>
    <div id="header-partners">
        <header class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <h2 class="text-white">{{ $store.getters.getTags({tag:'partners_text1'}) }}</h2>
                    </div>
                </div>
            </div>

            <template v-for="image in images">
                <img :class="'img-float-' + image.id" :src="image.img" :alt="'img-partner-' + image.id">
            </template>
        </header>
    </div>
</template>
<script>
    export default {
        name: 'partners-header',
        data() {
            return {
                images: [
                    { id: 1, img: '/images/iconos/circulo.svg' },
                    { id: 2, img: '/images/iconos/signodemas.svg' },
                    { id: 3, img: '/images/iconos/signodemas.svg' },
                ],
            }
        }
    }
</script>
<style scoped>
    #header-partners {
        background-color: #fff;
    }

    header {
        position: relative;
        width: 100%;
        min-height: 100vh;
        background-color: black;
        background-image: url('/images/partners/jumperr_banner_partners.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 97%, 0% 100%);
        clip-path: polygon(0 0, 100% 0, 100% 97%, 0% 100%);
    }

    @media (min-width: 992px) {
        header {
            webkit-clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
        }
    }


    /*Animaciones*/
    .img-float-1 {
        position: absolute;
        top: 120px;
        left: -15px;
        display: inline-block;
        width: 62px;
        height: 62px;
        animation: rotarRight 5s linear infinite;
    }

    .img-float-2 {
        position: absolute;
        top: 140px;
        right: 34px;
        display: inline-block;
        width: 18px;
        height: 18px;
        animation: rotarRight 1s linear infinite;
    }

    .img-float-3 {
        position: absolute;
        bottom: 100px;
        left: 20px;
        display: inline-block;
        width: 18px;
        height: 18px;
        animation: rotarRight 1s linear infinite;
    }

    @keyframes rotarRight {
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
