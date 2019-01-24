<template>
    <div class="bg-white position-relative">
        <div id="servicesPartners">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center title-border-bottom">{{ $store.getters.getTags({ tag: 'partners_text2' }) }}</h3>
                    </div>
                    <div class="col-12">
                        <swiper :options="swiperOption" class="p-md-4">
                            <swiper-slide :key="index" v-for="(service, index) in services">
                                <div class="cart">
                                    <div class="cart-header">
                                        <div class="image">
                                            <img :alt="service.title" :src="service.icono">
                                        </div>
                                    </div>
                                    <div class="cart-body">
                                        <div class="title">
                                            <h3 class="">{{ service.title }}</h3>
                                        </div>
                                        <p v-html="service.description"></p>
                                    </div>
                                </div>
                            </swiper-slide>
                            <div class="swiper-pagination swiper-pagination-x" slot="pagination"></div>
                        </swiper>
                    </div>
                </div>
            </div>
        </div>

        <template v-for="image in images">
            <img class="d-none d-md-inline-block" :class="'img-float-' + image.id" :src="image.img" :alt="'img-partner-' + image.id">
        </template>
    </div>
</template>
<script>
    export default {
        name: 'partners-services',
        data() {
            return {
                images: [
                    { id: 1, img: '/images/iconos/circulogrueso.svg' },
                    { id: 2, img: '/images/iconos/nube_2.svg' },
                    { id: 3, img: '/images/iconos/circulo.svg' },
                    { id: 4, img: '/images/partners/imagencircular.png' },
                ],
                swiperOption: {
                    slidesPerView: 3,
                    slidesPerColumn: 5,
                    slidesPerColumnFill: 'row',
                    spaceBetween: 40,
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
                            slidesPerView: 3,
                            spaceBetween: 40,
                            slidesPerColumn: 2,
                        }
                    }
                }
            }
        },
        computed: {
            services() {
                return [
                    {
                        icono:  '/images/partners/001-sitemap.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title5' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text9' })
                    },
                    {
                        icono:  '/images/partners/002-paper.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title6' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text10' })
                    },
                    {
                        icono:  '/images/partners/009-web-site.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title7' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text11' })
                    },
                    {
                        icono:  '/images/partners/003-picture.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title8' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text12' })
                    },
                    {
                        icono:  '/images/partners/004-global.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title9' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text13' })
                    },
                    {
                        icono:  '/images/partners/005-close-envelope.svg',
                        title: 'NEWSLETTER',
                        description: `Gestion de una lista de contactos personales con la posibilidad de enviar correo electronico y newsletters personalizados por medio de un software profesional.`
                    },
                    {
                        icono:  '/images/partners/006-graph.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title10' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text14' })
                    },
                    {
                        icono:  '/images/partners/007-pencil-edit-button.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title11' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text15' })
                    },
                    {
                        icono:  '/images/partners/008-content.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title12' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text16' })
                    },
                    {
                        icono:  '/images/partners/009-web-site.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title12' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text17' })
                    },
                    {
                        icono:  '/images/partners/010-trello-website-logo.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title13' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text18' })
                    },
                    {
                        icono:  '/images/partners/011-label.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title14' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text19' })
                    },
                    {
                        icono:  '/images/partners/012-cart.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title15' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text20' })
                    },
                    {
                        icono:  '/images/partners/013-smartphone.svg',
                        title: this.$store.getters.getTags({ tag: 'partners_title16' }),
                        description: this.$store.getters.getTags({ tag: 'partners_text21' })
                    }
                ];

            }
        }
    }
</script>
<style scoped>
    #servicesPartners {
        -webkit-clip-path: polygon(0 4%, 100% 0, 100% 100%, 0% 100%);
        clip-path: polygon(0 4%, 100% 0, 100% 100%, 0% 100%);
        position: relative;
        background-color: #f8f8f8;
        padding-top: 80px;
        min-height: 900px;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem auto 1.1rem;
    }

    .cart-header .image img {
        width: 46px;
    }

    .title h3 {
        font-size: 1.4rem;
        margin-top: 1rem;
    }

    .cart-body p {
        font-size: 1.1rem;
    }

    /*  */
    /*      animaciones */
    /*  */
    .img-float-1 {
        position: absolute;
        top: 0px;
        right: 0px;
        transform: translate(50%, -50%);
        display: inline-block;
        width: 140px;
        animation: opacidad 20s linear infinite;
    }

    .img-float-2 {
        position: absolute;
        top: 480px;
        bottom: auto;
        left: 0px;
        display: inline-block;
        width: 180px;
        animation: float 15s linear infinite;
    }

    .img-float-3 {
        position: absolute;
        bottom: 160px;
        left: -40px;
        display: inline-block;
        width: 100px;
        animation: opacidad 20s linear infinite;
    }

    .img-float-4 {
        position: absolute;
        bottom: -80px;
        right: 0px;
        display: inline-block;
        width: 60%;
        z-index: 1000;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .img-float-2 {
            position: absolute;
            top: auto;
            bottom: 40px;
            left: 0px;
            display: inline-block;
            width: 140px;
            animation: float 15s linear infinite;
        }

        .img-float-4 {
            position: absolute;
            bottom: -80px;
            right: 0px;
            display: inline-block;
            width: 36%;
            z-index: 1000;
        }
    }

    @media (min-width: 992px) {
        #servicesPartners {
            min-height: auto;
        }

        .img-float-3 {
            position: absolute;
            bottom: 380px;
            left: -40px;
            display: inline-block;
            width: 100px;
            animation: opacidad 20s linear infinite;
        }

        .img-float-4 {
            position: absolute;
            bottom: 0px;
            right: 0px;
            transform: translateY(40%);
            display: inline-block;
            z-index: 1000;
            width: 30%;
        }
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

    @keyframes float {
        0% {
            left: -5%;
            opacity: 1;
        }
        5% {
            left: 5%;
            opacity: 1;
        }
        10% {
            left: 10%;
            opacity: 1;
        }
        15% {
            left: 15%;
            opacity: 1;
        }

        20% {
            left: 20%;
            opacity: 1;
        }
        25% {
            left: 25%;
            opacity: 1;
        }
        30% {
            left: 30%;
            opacity: 1;
        }
        35% {
            left: 35%;
            opacity: 1;
        }
        40% {
            left: 40%;
            opacity: 1;
        }
        45% {
            left: 45%;
            opacity: 1;
        }
        50% {
            left: 50%;
            opacity: 1;
        }
        55% {
            left: 55%;
            opacity: 1;
        }
        60% {
            left: 60%;
            opacity: 1;
        }
        65% {
            left: 65%;
            opacity: 1;
        }
        70% {
            left: 70%;
            opacity: 1;
        }
        75% {
            left: 75%;
            opacity: 1;
        }
        80% {
            left: 80%;
            opacity: 1;
        }
        85% {
            left: 85%;
            opacity: 1;
        }
        90% {
            left: 90%;
            opacity: 1;
        }
        95% {
            left: 100%;
            opacity: 1;
        }
        100% {
            left: 150%;
            opacity: 0;
        }
    }
</style>
