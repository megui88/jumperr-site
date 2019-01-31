<template>
    <div id="servicePresentation">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <h3 class="text-center title-border-bottom">{{ $store.getters.getTags({ tag: 'careers_text5' }) }}</h3>
                    <p class="lead text-center">{{ $store.getters.getTags({ tag: 'careers_text19' }) }}</p>
                </div>

                <div class="col-12">
                    <swiper :options="swiperOption" class="p-md-4">
                        <swiper-slide v-for="(service, index) in services" :key="index">
                            <div class="cart">
                                <div class="cart-body">
                                    <div class="title">
                                        <h3 class="mb-0">{{ service.title }}</h3>
                                        <span class="d-block mb-3">{{ service.location }}</span>
                                    </div>
                                    <p>
                                        <strong>{{ service.time }}</strong>
                                        <br>
                                        <small> {{ service.modality }} </small>
                                    </p>
                                    <a href="/contatto" class="btn btn-primary align-self-end">{{ $store.getters.getTags({ tag: 'careers_text18' }) }}</a>
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
        name: 'careers-employment',
        data() {
            return {
                swiperOption: {
                    slidesPerView: 3,
                    slidesPerColumn: 2,
                    slidesPerColumnFill: 'row',
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
                            slidesPerView: 3,
                            spaceBetween: 30,
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
                        location: this.$store.getters.getTags({tag: 'careers_text21'}),
                        title:this.$store.getters.getTags({tag: 'careers_text11'}),
                        time:this.$store.getters.getTags({tag: 'careers_text16'}),
                        modality:this.$store.getters.getTags({tag: 'careers_text26'}),
                        url: '/labori/1'
                    },
                    {
                        location:this.$store.getters.getTags({tag: 'careers_text22'}),
                        title:this.$store.getters.getTags({tag: 'careers_text12'}),
                        time:this.$store.getters.getTags({tag: 'careers_text16'}),
                        modality:this.$store.getters.getTags({tag: 'careers_text26'}),
                        url: '/labori/1'
                    },
                    {
                        location:this.$store.getters.getTags({tag: 'careers_text23'}),
                        title:this.$store.getters.getTags({tag: 'careers_text11'}),
                        time:this.$store.getters.getTags({tag: 'careers_text16'}),
                        modality:this.$store.getters.getTags({tag: 'careers_text17'}),
                        url: '/labori/1'
                    },
                    {
                        location:this.$store.getters.getTags({tag: 'careers_text23'}),
                        title:this.$store.getters.getTags({tag: 'careers_text13'}),
                        time:this.$store.getters.getTags({tag: 'careers_text16'}),
                        modality:this.$store.getters.getTags({tag: 'careers_text26'}),
                        url: '/labori/1'
                    },
                    {
                        location:this.$store.getters.getTags({tag: 'careers_text24'}),
                        title:this.$store.getters.getTags({tag: 'careers_text15'}),
                        time:this.$store.getters.getTags({tag: 'careers_text16'}),
                        modality:this.$store.getters.getTags({tag: 'careers_text26'}),
                        url: '/labori/1'
                    },
                    {
                        location:this.$store.getters.getTags({tag: 'careers_text21'}),
                        title:this.$store.getters.getTags({tag: 'careers_text14'}),
                        time:this.$store.getters.getTags({tag: 'careers_text16'}),
                        modality:this.$store.getters.getTags({tag: 'careers_text17'}),
                        url: '/labori/1'
                    },
                    {
                        location:this.$store.getters.getTags({tag: 'careers_text25'}),
                        title:this.$store.getters.getTags({tag: 'careers_text11'}),
                        time:this.$store.getters.getTags({tag: 'careers_text16'}),
                        modality:this.$store.getters.getTags({tag: 'careers_text26'}),
                        url: '/labori/1'
                    },
                ];
            }
        }
    }
</script>
<style scoped>
    #servicePresentation {
        position: relative;
        background-color: #fff;
        padding-bottom: 60px;
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
        height: 280px;
        display: flex;
        overflow: hidden;
        border-radius: .6rem;
        box-shadow: 0px 0px 15px 4px rgba(204, 204, 204, 0.312);
    }

    .cart-body {
        width: 100%;
        height: 100%;
        background-color: white;
        padding: 1.8rem 2rem;
        font-size: 1.1rem;
        display: grid;
    }

    .title span {
        color: #f26336;
    }

    .cart-body h3 {
        font-size: 1.4rem;
        margin-top: 1rem;
    }

    @media (min-width: 768px) {
        .cart-body h3 {
            font-size: 1.4rem;
        }

        .cart-body {
            font-size: 1rem;
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
        z-index: 1000;
    }

    .img-float-2 {
        position: absolute;
        bottom: 45%;
        left: -45px;
        display: inline-block;
        width: 160px;
        animation: float 30s linear infinite;
        z-index: 1000;
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
