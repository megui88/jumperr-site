<template>
    <div id="section_blogs">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <article class="text-center">
                        <h3 class="title-border-bottom">{{ $store.getters.getTags({ tag: 'partners_title12' }) }}</h3>
                        <h4 class="mb-md-5">{{ $store.getters.getTags({ tag: 'home_text10' }) }}</h4>
                    </article>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <swiper :options="swiperOption">
                        <swiper-slide v-for="(blog, id) in blogs" :key="id">
                            <div>
                                <img :src="blog.image" class="img-fluid" :alt="blog.titulo">
                                <router-link :to="blog.enlace">
                                    <small>{{ blog.categoria }}</small>
                                </router-link>
                                <h6 class="title-blog">{{ blog.titulo }}</h6>
                                <router-link :to="blog.enlace">{{ $store.getters.getTags({ tag: 'general_vermas' }) }}</router-link>
                            </div>
                        </swiper-slide>
                    </swiper>

                </div>
                
                <div class="col-12 text-center">
                        <router-link to="#" class="btn btn-primary mt-5 text-uppercase">{{ $store.getters.getTags({ tag: 'home_text11' }) }}</router-link>
                </div>
            </div>
        </div>

        <img class="img-1" src="/images/iconos/circulogrueso.svg" alt="elemento jumperr">
        <img class="img-2" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
    </div>
</template>
<script>
    export default {
        name: 'home-blog',
        data() {
            return {
                swiperOption: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    freeMode: true,
                    autoplay: {
                        delay: 2000,
                        // disableOnInteraction: true,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    breakpoints: {
                        460: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                            freeMode: false,
                            loop: false,
                        },
                        680: {
                            slidesPerView: 2,
                            spaceBetween: 10,
                            freeMode: false,
                        },
                        860: {
                            slidesPerView: 3,
                            spaceBetween: 10,
                            freeMode: false,
                        },
                    }
                },
                blogs: [
                    {
                        categoria: 'Proyecto',
                        titulo: 'Conoce el e-commerce de Zu´Pietru, los mejores postres silicianos en Olbia',
                        image: '/images/blog/jumperr-blog1-home.jpg',
                        enlace: '#',
                    },
                    {
                        categoria: 'Proyecto',
                        titulo: 'Nuevas tendencias de diseño para el 2019',
                        image: '/images/blog/jumperr-blog2-home.jpg',
                        enlace: '#',
                    },
                    {
                        categoria: 'Proyecto',
                        titulo: 'Desarrollamos la identidad corporativa de FD-Grafik',
                        image: '/images/blog/jumperr-blog3-home.jpg',
                        enlace: '#',
                    },
                    {
                        categoria: 'Proyecto',
                        titulo: 'Estas en Olbia y quieres comer pizza pidela al Delivery de Pizzeria Da Adriano',
                        image: '/images/blog/jumperr-blog4-home.jpg',
                        enlace: '#',
                    },
                ]
            }
        }
    }
</script>
<style scoped>
    .img-1 {
        position: absolute;
        top: -50px;
        right: -30px;
        display: inline-block;
        width: 120px;
        height: 120px;
        animation: float 5s linear infinite;
    }

    .img-2 {
        position: absolute;
        top: 50px;
        left: 30px;
        display: inline-block;
        width: 20px;
        height: 20px;
        animation: float 1s linear infinite;
    }

    @keyframes float {
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

    .title-blog {
        color: #1f1f1f;
    }

    #section_blogs {
        position: relative;
        background-color: #fff;
        padding-top: 2rem;
        padding-bottom: 4rem;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem auto 1.1rem;
    }

    /*Slider swiper*/
    .swiper-inner {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        max-width: 100%;
    }

    @media (min-width: 992px) {
        .swiper-slide {
            max-width: 320px;
        }
    }

    .swiper-pagination-fraction,
    .swiper-pagination-custom,
    .swiper-container-horizontal > .swiper-pagination-bullets {
        margin-top: 1rem;
        bottom: 0px;
        left: 0;
        width: 100%;
    }

    .swiper-pagination {
        position: relative;
        text-align: center;
        -webkit-transition: 300ms opacity;
        -o-transition: 300ms opacity;
        transition: 300ms opacity;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        z-index: 10;
    }


    /*Card bootstrap*/
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.3rem;
        padding-bottom: 2rem;
        min-height: 270px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    p {
        font-size: 1rem;
        line-height: 1.6rem;
    }

    .btn {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        font-weight: 700;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.275rem 1.8rem;
        font-size: .9rem;
        line-height: 1.6;
        border-radius: 1.25rem;
        align-self: center;
    }
</style>
