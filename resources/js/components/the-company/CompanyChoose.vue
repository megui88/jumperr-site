<template>
    <div class="position-relative py-4">
        <div class="objecto-bg">
            <img src="/images/la-empresa/fondoelegirnos_compañia-min.png" alt="header-img-company">
        </div>
        <div class="wrapper-position">
            <section class="grid-wrapper">
                <article class="">
                    <div class="w-100">
                        <h3 class="title-border-bottom text-white">{{ $store.getters.getTags({ tag: 'text4' }) }}</h3>

                        <span v-html="$store.getters.getTags({ tag: 'company_text5' })"></span>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="wrapper-motivos">
                            <swiper :options="swiperOption">
                                <template v-for="(slide, index) in slides">
                                    <swiper-slide>
                                        <div class="item mt-2 text-center">
                                            <img :src="slide.img" :alt="'img-' + index">
                                            <h6 class="text-center text-white text-uppercase mt-2">{{ slide.title }}</h6>
                                        </div>
                                    </swiper-slide>
                                </template>
                            </swiper>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'company-choose',
        data() {
            return {
                swiperOption: {
                    slidesPerView: 5,
                    spaceBetween: 40,
                    autoplay: {
                        delay: 3000,
                        // disableOnInteraction: true,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    breakpoints: {
                        460: {
                            slidesPerView: 2,
                            spaceBetween: 0,
                            freeMode: false,
                            loop: false,
                        },
                        680: {
                            slidesPerView: 2,
                            spaceBetween: 0,
                            freeMode: false,
                        },
                        860: {
                            slidesPerView: 3,
                            spaceBetween: 5,
                            freeMode: false,
                        },
                    }
                },
            }
        },
        computed: {
            slides() {
             return [
                    { title: this.$store.getters.getTags({ tag: 'company_text8' }), img: '/images/la-empresa/5.svg'},
                    { title: this.$store.getters.getTags({ tag: 'company_text9' }), img: '/images/la-empresa/2.svg'},
                    { title: this.$store.getters.getTags({ tag: 'company_text10' }), img: '/images/la-empresa/4.svg'},
                    { title: this.$store.getters.getTags({ tag: 'company_text11' }), img: '/images/la-empresa/1.svg'},
                    { title: this.$store.getters.getTags({ tag: 'company_text12' }), img: '/images/la-empresa/3.svg'},
                ];
            }
        }
    }
</script>
<style scoped>
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

    .wrapper-position {
        position: absolute;
        width: 100%;
        height: auto;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
    }

    .grid-wrapper {
        max-width: 1140px;
        height: auto;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: 672px;
    }

    article {
        display: flex;
        align-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .objecto-bg {
        width: 100%;
        height: auto;
        overflow-x: hidden;
    }

    .objecto-bg img {
        width: 100%;
        min-width: 1366px;
        height: auto;
    }

    .wrapper-motivos {
    }

    .wrapper-motivos .item img {
        height: 100px;
        width: auto;
    }
</style>
