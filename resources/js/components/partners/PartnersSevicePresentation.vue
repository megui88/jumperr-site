<template>
    <div id="servicePresentation">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center title-border-bottom">{{ $store.getters.getTags({ tag: 'partners_text2' }) }}</h3>
                </div>
                <div class="col-12">
                    <swiper :options="swiperOption" class="p-md-4">
                        <swiper-slide v-for="(service, index) in services" :key="index">
                            <div class="cart">
                                <div class="cart-header">
                                    <div class="image">
                                        <img :src="service.icono" :alt="service.title">
                                    </div>
                                    <div class="title">
                                        <h3 class="text-white">{{service.title}}</h3>
                                    </div>
                                </div>
                                <div class="cart-body">
                                    <p>{{ service.description }}</p>
                                </div>
                            </div>
                        </swiper-slide>
                        <div class="swiper-pagination swiper-pagination-x" slot="pagination"></div>
                    </swiper>
                </div>
            </div>
        </div>
        <img class="img-float-1 d-none d-md-inline-block" src="/images/iconos/nube.svg" alt="elemento jumperr">
        <img class="img-float-2 d-none d-md-inline-block" src="/images/iconos/nube.svg" alt="elemento jumperr">
    </div>
</template>
<script>
    export default {
        name: 'partners-service-presentation',
        data() {
            return {
                services: [
                    {
                        icono: '/images/partners/laptop_serviciosdigitales.png',
                        title:this.$store.getters.getTags({ tag: 'partners_text2' }),
                        description:this.$store.getters.getTags({ tag: 'partners_text3' })
                    },
                    {
                        icono: '/images/partners/iconi_2.svg',
                        title:this.$store.getters.getTags({ tag: 'partners_title2' }),
                        description:this.$store.getters.getTags({ tag: 'partners_text4' })
                    },
                    {
                        icono: '/images/partners/icono3_serviciosdigitales.png',
                        title:this.$store.getters.getTags({ tag: 'partners_title3' }),
                        description:this.$store.getters.getTags({ tag: 'partners_text5' })
                    },
                    {
                        icono: '/images/partners/icono4_serviciosdigitales.svg',
                        title:this.$store.getters.getTags({ tag: 'partners_title4' }),
                        description:this.$store.getters.getTags({ tag: 'partners_text6' })
                    },
                ],
                swiperOption: {
                    slidesPerView: 2,
                    slidesPerColumn: 2,
                    spaceBetween: 30,
                    autoplay: {
                        delay: 3000,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        renderBullet(index, className) {
                            return `<span class="${ className } swiper-pagination-bullet-x"></span>`
                        }
                    },
                    breakpoints: {
                        380: {
                            slidesPerView: 1,
                            spaceBetween: 30,
                            slidesPerColumn: 1,

                        },
                        768: {
                            slidesPerView: 1,
                            spaceBetween: 30,
                            slidesPerColumn: 1,

                        },
                        992: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                            slidesPerColumn: 2,
                        }
                    }
                }
            }
        }
    }
</script>
<style scoped>
    #servicePresentation {
        position: relative;
        background-color: #fff;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem auto 1.1rem;
    }

    .cart {
        width: inherit;
        height: 480px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        border-radius: .6rem;
        box-shadow: 0px 0px 15px 4px rgba(204, 204, 204, 0.312);
    }

    .cart-header {
        width: inherit;
        height: 50%;
        background-color: #f26336;
        text-align: center;
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: 50% 50%;
    }

    .swiper-slide:first-child .cart-header {
        background-color: #333;
    }

    .swiper-slide:last-child .cart-header {
        background-color: #333;
    }

    .cart-header .image {
        display: flex;
        align-items: flex-end;
    }

    .cart-header .image img {
        height: 80px;
        margin: 0 auto;
    }

    .cart-header .title {

    }

    .cart-header h3 {
        font-size: 1.6rem;
        margin-top: 1rem;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .cart-body {
        width: inherit;
        height: 50%;
        background-color: white;
        padding: 1.8rem 2.4rem;
        font-size: 1.1rem;
        text-align: center;
    }

    @media (min-width: 768px) {
        .cart-header h3 {
            font-size: 2rem;
        }

        .cart-body {
            font-size: 1.3rem;
        }
    }

    /* animaciones */
    .img-float-1 {
        position: absolute;
        top: -50px;
        left: -45px;
        display: inline-block;
        width: 160px;
        animation: float 20s linear infinite;
    }

    .img-float-2 {
        position: absolute;
        bottom: 45%;
        left: -45px;
        display: inline-block;
        width: 160px;
        animation: float 30s linear infinite;
    }

    @keyframes float {
        0% {
            left: -5%;
            transform: translateY(-10px);
            opacity: 1;
        }
        5% {
            left: 5%;
            transform: translateY(10px);
            opacity: 1;
        }
        10% {
            left: 10%;
            transform: translateY(-10px);
            opacity: 1;
        }
        15% {
            left: 15%;
            transform: translateY(10px);
            opacity: 1;
        }

        20% {
            left: 20%;
            transform: translateY(-10px);
            opacity: 1;
        }
        25% {
            left: 25%;
            transform: translateY(10px);
            opacity: 1;
        }
        30% {
            left: 30%;
            transform: translateY(-10px);
            opacity: 1;
        }
        35% {
            left: 35%;
            transform: translateY(10px);
            opacity: 1;
        }
        40% {
            left: 40%;
            transform: translateY(-10px);
            opacity: 1;
        }
        45% {
            left: 45%;
            transform: translateY(10px);
            opacity: 1;
        }
        50% {
            left: 50%;
            transform: translateY(-10px);
            opacity: 1;
        }
        55% {
            left: 55%;
            transform: translateY(10px);
            opacity: 1;
        }
        60% {
            left: 60%;
            transform: translateY(-10px);
            opacity: 1;
        }
        65% {
            left: 65%;
            transform: translateY(10px);
            opacity: 1;
        }
        70% {
            left: 70%;
            transform: translateY(-10px);
            opacity: 1;
        }
        75% {
            left: 75%;
            transform: translateY(10px);
            opacity: 1;
        }
        80% {
            left: 80%;
            transform: translateY(-10px);
            opacity: 1;
        }
        85% {
            left: 85%;
            transform: translateY(10px);
            opacity: 1;
        }
        90% {
            left: 90%;
            transform: translateY(-10px);
            opacity: 1;
        }
        95% {
            left: 100%;
            transform: translateY(10px);
            opacity: 1;
        }
        100% {
            left: 150%;
            transform: translateY(-10px);
            opacity: 0;
        }
    }
</style>

