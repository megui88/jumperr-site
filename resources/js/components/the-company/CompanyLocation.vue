<template>
    <div class="position-relative">
        <section class="grid-wrapper">
            <article class="">
                <div class="mb-5">
                    <h3 class="title-border-bottom">
                        {$store.getters.getTags({tag:'company_text6'})}}
                    </h3>
                    <p class="text-center mb-0 text-theme">
                        {$store.getters.getTags({tag:'company_text13'})}}
                    </p>
                </div>
            </article>
            <aside id="wrapper-scrolling">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 m-auto">
                            <!-- slider que se usa como paginador -->
                            <swiper :options="swiperOptionThumbs" class="gallery-thumbs" ref="swiperThumbs">
                                <swiper-slide>
                                    <div class="circle-slider">
                                    </div>
                                    <p class="text-center mb-0">2014</p>
                                </swiper-slide>
                                <swiper-slide>
                                    <div class="circle-slider">
                                    </div>
                                    <p class="text-center mb-0">2015</p>
                                </swiper-slide>
                                <swiper-slide>
                                    <div class="circle-slider">
                                    </div>
                                    <p class="text-center mb-0">2016</p>
                                </swiper-slide>
                                <swiper-slide>
                                    <div class="circle-slider">
                                    </div>
                                    <p class="text-center mb-0">2017</p>
                                </swiper-slide>
                                <swiper-slide>
                                    <div class="circle-slider">
                                    </div>
                                    <p class="text-center mb-0">2018</p>
                                </swiper-slide>
                                <swiper-slide>
                                    <div class="circle-slider">
                                    </div>
                                    <p class="text-center mb-0">2019</p>
                                </swiper-slide>
                            </swiper>
                            <!-- end slider que se usa como paginador -->
                        </div>
                    </div>
                </div>
                <div id="scrolling" class="zonas">

                    <img class="nube-1" src="/images/iconos/nube.svg" alt="">
                    <img class="nube-2" src="/images/iconos/nube.svg" alt="">
                    <swiper :options="swiperOptionTop" class="gallery-top" ref="swiperTop">
                        <div class="parallax-bg" slot="parallax-bg" data-swiper-parallax="-5%"></div>
                        <swiper-slide>
                            <div class="zona zona-1">
                                <img class="item-1" src="/images/la-empresa/vectores/1_ciudad.svg" alt="">
                                <img class="item-2" src="/images/la-empresa/vectores/1_personas.svg" alt="">
                                <img class="item-3" src="/images/la-empresa/vectores/2_personas.svg" alt="">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="zona zona-2">
                                <img class="item-1" src="/images/la-empresa/vectores/3_ciudad.svg" alt="">
                                <img class="item-2" src="/images/la-empresa/vectores/5_personas.svg" alt="">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div id="zona3" class="zona zona-3">
                                <img class="item-1" src="/images/la-empresa/vectores/2_ciudad.svg" alt="">
                                <img class="item-2" src="/images/la-empresa/vectores/3_personas.svg" alt="">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div id="zona4" class="zona zona-4">
                                <img class="item-1" src="/images/la-empresa/vectores/4_ciudad.svg" alt="">
                                <img class="item-2" src="/images/la-empresa/vectores/8_personas.svg" alt="">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div id="zona5" class="zona zona-5">
                                <img class="item-1" src="/images/la-empresa/vectores/5_ciudad.svg" alt="">
                                <img class="item-2" src="/images/la-empresa/vectores/7_personas.svg" alt="">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div id="zona6" class="zona zona-6">
                                <img class="item-1" src="/images/la-empresa/vectores/6_ciudad.svg" alt="">
                                <img class="item-2" src="/images/la-empresa/vectores/4_personas.svg" alt="">
                            </div>
                        </swiper-slide>
                    </swiper>

                </div>
            </aside>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'company-location',
        data() {
            return {
                swiperOptionTop: {
                    slidesPerView: 'auto',
                    freeMode: true,
                    loop: true,
                    speed: 1900,
                    parallax: true,
                    loopedSlides: 5, //looped slides should be the same
                    autoplay: {
                        delay: 5000,
                    },
                },
                swiperOptionThumbs: {
                    slidesPerView: 5,
                    touchRatio: 0.2,
                    centeredSlides: true,
                    loop: true,
                    speed: 1900,
                    loopedSlides: 5, //looped slides should be the same
                    slideToClickedSlide: true,
                    autoplay: {
                        delay: 5000,
                    },
                }
            }
        },
        mounted() {
            this.$nextTick(() => {
                const swiperTop = this.$refs.swiperTop.swiper
                const swiperThumbs = this.$refs.swiperThumbs.swiper
                swiperTop.controller.control = swiperThumbs
                swiperThumbs.controller.control = swiperTop
            })
        }

    }
</script>
<style scoped>
    .text-theme {
        color: #f26336;
    }

    h3 {
        font-size: 1.6rem;
        text-align: center;
    }

    p {
        font-size: 1.2rem;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1rem auto 1.1rem;
    }

    /*  DESDE AQUI COMIENZA EL SLIDER  */
    .wrapper-scrolling {
        min-width: 100%;
    }

    #scrolling {
        position: relative;
    }

    /* Div de imagen de fondo. montañas parallax */
    .parallax-bg {
        position: absolute;
        left: 0;
        top: 0;
        width: 1000%;
        height: 100%;
        background-size: auto 280px;
        background-repeat: repeat-x;
        background-position: center;
        background-image: url('/images/la-empresa/jumperr-fondo.svg');
    }

    /* botones de navegaciones de años 2014 2015 2016 2017 2018 2019 */
    .swiper-slide-active .circle-slider {
        width: 24px;
        height: 24px;
        border: 3px solid #f26937;
        border-radius: 50%;
        background-color: #fff;
    }

    .circle-slider {
        width: 18px;
        height: 18px;
        border: 3px solid #ababab;
        border-radius: 50%;
        background-color: #fff;
    }

    .gallery-thumbs .swiper-slide {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .swiper-slide {
        width: auto;
    }

    /* Zonas o items del slider con cada imagen */
    .zonas {
        width: 100%;
        /* padding-right: 15px;
        padding-left: 15px; */
        padding-top: 15px;
        padding-bottom: 15px;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 50px;
    }

    /* _______________________ */
    .zona-1 {
        position: relative;
        width: 40%;
        min-width: 460px;
        height: 600px;
    }

    .zona-1 .item-1 {
        width: 90%;
        height: auto;
        position: absolute;
        bottom: 50%;
        left: 50%;
        transform: translateX(-50%);
    }

    .zona-1 .item-2 {
        width: 36%;
        position: absolute;
        bottom: 4%;
        left: 50%;
        transform: translateX(-70%);
    }

    .zona-1 .item-3 {
        width: 18%;
        position: absolute;
        bottom: 4%;
        right: -5%;
    }

    /* _______________________ */
    .zona-2 {
        position: relative;
        width: 36%;
        height: 600px;
        min-width: 460px;
    }

    .zona-2 .item-1 {
        width: 110%;
        height: auto;
        position: absolute;
        bottom: 40%;
        right: -12%;
    }

    .zona-2 .item-2 {
        width: 34%;
        position: absolute;
        bottom: 4%;
        right: 0%;
    }

    /* _______________________ */
    .zona-3 {
        position: relative;
        width: 36%;
        height: 600px;
        min-width: 460px;
    }

    .zona-3 .item-1 {
        width: 20%;
        height: auto;
        position: absolute;
        top: 12%;
        left: 15%;
    }

    .zona-3 .item-2 {
        width: 60%;
        position: absolute;
        bottom: 0%;
        left: 20%;
    }

    /*________________________*/
    .zona-4 {
        position: relative;
        width: 36%;
        height: 600px;
        min-width: 460px;
    }

    .zona-4 .item-1 {
        width: 60%;
        height: auto;
        position: absolute;
        top: 0%;
        right: 0%;
    }

    .zona-4 .item-2 {
        width: 40%;
        position: absolute;
        bottom: 0%;
        left: 0%;
    }

    /*_____________________*/
    .zona-5 {
        position: relative;
        width: 36%;
        height: 600px;
        min-width: 460px;
    }

    .zona-5 .item-1 {
        width: 56%;
        height: auto;
        position: absolute;
        top: 10%;
        right: 0%;
    }

    .zona-5 .item-2 {
        width: 31%;
        position: absolute;
        top: 20%;
        left: 0%;
    }

    /*_______________________________*/
    .zona-6 {
        position: relative;
        width: 100%;
        height: 600px;
        min-width: 860px;
    }

    .zona-6 .item-1 {
        width: 80%;
        height: auto;
        position: absolute;
        bottom: 10%;
        right: 0%;
    }

    .zona-6 .item-2 {
        width: 15%;
        position: absolute;
        bottom: 0%;
        left: 0%;
    }

    /* Animacion y nube */
    .nube-1 {
        position: absolute;
        top: 30px;
        left: 50px;
        width: 100px;
        animation: float 2s infinite;
    }

    .nube-2 {
        position: absolute;
        top: 80px;
        right: 300px;
        width: 100px;
        animation: float 2s infinite;
    }

    @media (max-width: 460px) {
        .nube-1 {
            position: absolute;
            top: 30px;
            left: 50px;
            width: 100px;
            animation: float 2s infinite;
        }

        .nube-2 {
            position: absolute;
            top: 100px;
            right: 10px;
            width: 100px;
            animation: float 2s infinite;
        }
    }

    @keyframes float {
        0% {
            transform: translatey(0px);
        }
        50% {
            transform: translatey(-10px);
        }
        100% {
            transform: translatey(0px);
        }
    }
</style>
