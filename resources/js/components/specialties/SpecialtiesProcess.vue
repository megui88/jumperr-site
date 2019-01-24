<template>
    <div id="procesos-especialidades">
        <section class="proceso">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title-border-bottom text-center text-white">{{ $store.getters.getTags({ tag: 'specialties_title7' }) }}</h3>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-between text-white text-center">
                            <span :class="menuSlide == 0 ? 'active-slide' : ''">{{ $store.getters.getTags({ tag: 'specialties_title8' }) }}</span>
                            <span :class="menuSlide == 1 ? 'active-slide' : ''">{{ $store.getters.getTags({ tag: 'specialties_title9' }) }}</span>
                            <span :class="menuSlide == 2 ? 'active-slide' : ''">{{ $store.getters.getTags({ tag: 'specialties_title10' }) }}</span>
                            <span :class="menuSlide == 3 ? 'active-slide' : ''">{{ $store.getters.getTags({ tag: 'specialties_title11' }) }}</span>
                        </div>
                        <div class="mt-3">
                            <div class="circulos-procesos mt-4">
                                <img class="circulo-dotted" src="/images/especialidades/jumperr-proceso-2.svg" alt="Jumperr especialidades">
                                <img class="circulo-orange" src="/images/especialidades/jumperr-nuestroprocesos-especialidades.svg" alt="Jumperr especialidades">
                            </div>
                            <swiper :options="swiperOption" ref="mySwiper">
                                <swiper-slide v-for="(step, index) in steps" :key="index">
                                    <div>
                                        <p class="text-center text-themes">{{ step.step }}</p>
                                        <h4 class="text-center text-white">{{ step.text }}</h4>
                                    </div>
                                </swiper-slide>
                                <div class="swiper-pagination" slot="pagination"></div>
                                <div class="swiper-button-prev" slot="button-prev"></div>
                                <div class="swiper-button-next" slot="button-next"></div>
                            </swiper>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'specialties-process',
        data() {
            return {
                swiperOption: {
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'progressbar',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                    autoplay: {
                        delay: 3000,
                    },
                    speed: 2500,
                },
                menuSlide: 0,
            }
        },
        mounted() {
            this.detectarCambioSlide();
        },
        computed: {
            steps() {
                return [
                    {
                        step: this.$store.getters.getTags({ tag: 'specialties_step1' }),
                        text: this.$store.getters.getTags({ tag: 'specialties_text19' })
                    },
                    {
                        step: this.$store.getters.getTags({ tag: 'specialties_step2' }),
                        text: this.$store.getters.getTags({ tag: 'specialties_text20' })
                    },
                    {
                        step: this.$store.getters.getTags({ tag: 'specialties_step3' }),
                        text: this.$store.getters.getTags({ tag: 'specialties_text21' })
                    },
                    {
                        step: this.$store.getters.getTags({ tag: 'specialties_step4' }),
                        text: this.$store.getters.getTags({ tag: 'specialties_text22' })
                    },
                ];
            }
        },
        methods: {
            detectarCambioSlide() {
                const mySwiper = this.$refs.mySwiper.swiper
                const this2 = this;
                mySwiper.on('slideChange', function () {
                    this2.activarSlide(mySwiper.activeIndex);
                });
            },
            activarSlide(value) {
                this.menuSlide = value;
            }
        }
    }
</script>
<style scoped>
    #procesos-especialidades {
        z-index: -1;
    }

    .proceso {
        background-color: #000;
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('/images/especialidades/procesos.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 800px;
        margin-bottom: -100px;
        display: flex;
        align-items: center;
        position: relative;
        padding: 3rem 0;
    }

    .circulos-procesos {
        width: 340px;
        height: 340px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .circulo-dotted {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        opacity: .4;
    }

    .circulo-orange {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        height: 90%;
        opacity: .4;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem auto 1.1rem;
    }

    .active-slide {
        color: #f26336;
    }

    .text-themes {
        color: #f26336;
        font-size: 1.2rem;
    }

    .swiper-slide {
        height: 420px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
        background-image: url('/images/especialidades/left-arrow.svg');
    }

    .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
        background-image: url('/images/especialidades/right-arrow.svg');
    }

    @media (min-width: 992px) {
        h4 {
            font-size: 2.4rem;
        }
    }
</style>
