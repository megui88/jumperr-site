<template>
    <div id="quienes_somos">
        <section class="grid-container">
            <div class="d-flex align-items-lg-center">
                <article >
                    <h6 class="text-uppsercase text-theme">{{ $store.getters.getTags({ tag: 'text1' }) }}</h6>
                    <h3 class="title-border-bottom">{{ $store.getters.getTags({ tag: 'company_title1' }) }}</h3>
                    <span v-html="$store.getters.getTags({ tag: 'company_text2' })"></span>
                </article>
            </div>

            <aside>
                <div class="position-relative d-inline-block">
                    <div class="fondo-slider"></div>
                        <div class="contenedor-slider"> <!--Elemento fondo raya-->
                        <swiper :options="swiperOption">
                            <swiper-slide>
                                <img class="img-fluid" src="/images/la-empresa/jumperr_slider1_compañia-min.jpg" alt="compañia">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="img-fluid" src="/images/la-empresa/jumperr_slider2_compañia-min.jpg" alt="compañia">
                            </swiper-slide>

                            <div class="navegacion">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </swiper>
                        <img class="circulo-jumperr" src="/images/la-empresa/logocircular.svg" alt="jumperr"> <!-- Elemento circulo jumperr -->
                    </div>
                </div>
            </aside>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'company-about',
        data() {
            return {
                swiperOption: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    effect: 'fade',
                    loop: true,
                    autoplay: {
                        delay: 2000,
                        // disableOnInteraction: true,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    }
                },
            }
        }
    }
</script>
<style scoped>
    .circulo-jumperr {
        position: absolute;
        top: -30px;
        left: 10px;
        width: 80px;
        height: 80px;
        z-index: 10;
        animation: pulse 3s linear 1s infinite;
        border-radius: 50%;
    }

    @keyframes pulse {
        0% {
            -moz-box-shadow: 0 0 0 0 #f2623670;
            box-shadow: 0 0 0 0 #f2623670;
        }
        70% {
            -moz-box-shadow: 0 0 0 10px #f2623600;
            box-shadow: 0 0 0 10px #f2623600;
        }
        100% {
            -moz-box-shadow: 0 0 0 0 #f2623600;
            box-shadow: 0 0 0 0 #f2623600;
        }
    }

    .text-theme {
        color: #f26336;
    }

    h3 {
        font-size: 1.6rem;
    }

    p {
        font-size: 1.2rem;
    }

    .grid-container {
        max-width: 1140px;
        height: auto;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        padding-top: 40px;
        padding-bottom: 60px;
        display: grid;
        grid-template-columns: 100%;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1rem 0rem 1.1rem;
    }

    .fondo-slider {
        background-image: url('/images/la-empresa/jumperr_cuadrolineal_home.png');
        background-size: cover;
        height: 380px;
        width: 320px;
        margin-left: 70px;
        margin-top: 0px;
    }

    .contenedor-slider {
        position: absolute;
        top: 40px;
        left: 0px;
    }

    /*Slider*/
    .swiper-container {
        max-width: 340px;
        margin: 0;
        border: 4px solid #f26336;
        object-fit: cover;
        overflow: visible;
    }

    .swiper-slide {
        width: 100%;
    }

    .navegacion {
        position: absolute;
        bottom: -85px;
        right: -15px;
        width: 80px;
        height: 60px;
    }

    .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
        background-image: url("/images/la-empresa/next.svg");
        right: 10px;
        left: auto;
    }

    .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
        background-image: url("/images/la-empresa/back.svg");
        left: 10px;
        right: auto;
    }

    .swiper-button-prev, .swiper-button-next {
        position: absolute;
        top: 50%;
        width: 27px;
        height: 44px;
        margin-top: -22px;
        z-index: 10;
        cursor: pointer;
        background-size: 40px 44px;
        background-position: center;
        background-repeat: no-repeat;
        outline: none;
    }

    @media (min-width: 768px) {
        .grid-container {
            grid-template-columns: 50% 50%;
            grid-template-rows: 500px;
            grid-column-gap: 15px;
            padding-top: 0px;
            padding-bottom: 0px;
        }
    }

    /* DESKTOP */
    @media (min-width: 1024px) {
        .circulo-jumperr {
            position: absolute;
            top: -15px;
            left: -30px;
            width: 80px;
            height: 80px;
            z-index: 10;
            animation: pulse 3s linear 1s infinite;
        }

        /* @keyframes jumperr {
            0%{ transform: translate(0px, 0px); }
            50%{ transform: translate(-10px, -10px) scale(1.1); }
            100%{ transform: translate(0px, 0px); }
        } */
        h3 {
            font-size: 2rem;
        }

        .fondo-slider {
            background-image: url('/images/la-empresa/jumperr_cuadrolineal_home.png');
            background-size: cover;
            height: 380px;
            width: 400px;
            margin-left: 70px;
            margin-top: 40px;
        }

        aside > div {
            margin-left: 50px;
        }

        .contenedor-slider {
            position: absolute;
            top: 70px;
            left: 0px;
        }

        /*Slider*/
        .swiper-container {
            max-width: 432px;
            margin: 0;
            border: 4px solid #f26336;
            object-fit: contain;
            overflow: visible;
        }

        .swiper-slide {
            width: 100%;
        }

        .navegacion {
            position: absolute;
            bottom: -20px;
            right: -85px;
            left: auto;
            width: 80px;
            height: 60px;
        }

    }
</style>
