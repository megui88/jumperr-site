<template>
    <div id="section_services" class="my-2 my-md-5 py-3 py-md-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <article class="text-center">
                        <h3 class="title-border-bottom">{{ $store.getters.getTags({ tag: 'home_text1' }) }}</h3>
                        <h4 class="mb-3 mb-md-5">{{ $store.getters.getTags({ tag: 'home_text2' }) }}</h4>
                    </article>
                </div>
            </div>
        </div>

            <swiper :options="swiperOption">
                <swiper-slide v-for="(service, id) in services" :key="id">
                    <div class="card">
                        <div class="contenedor-img">
                            <img :src="service.image" class="card-img-top" :alt="service.titulo">
                            <div class="contenedor-posicionado">
                                <img class="icono-service" :src="service.icono" :alt="service.title">
                                <h3 class="title-img">{{service.titulo}}</h3>
                            </div>
                        </div>

                        <div class="card-body text-center">
                            <p class="card-text">{{ service.descripcion }}</p>
                            <a :href="service.enlace" class="btn btn-primary text-uppercase">
                                {{ $store.getters.getTags({ tag: 'general_vermas'}) }}
                            </a>
                        </div>
                    </div>
                </swiper-slide>
                <div class="swiper-pagination" slot="pagination"></div>
            </swiper>
                <!-- 
                    tags alternativos para los titulos ya que el home_title7 fallo se crearon estos
                {{ $store.getters.getTags({ tag: 'home_service_title_jumperr_studio' }) }}
                {{ $store.getters.getTags({ tag: 'home_service_title_jumperr_web' }) }}
                {{ $store.getters.getTags({ tag: 'home_service_title_jumperr_start' }) }}
                {{ $store.getters.getTags({ tag: 'home_service_title_redes' }) }}
                {{ $store.getters.getTags({ tag: 'home_service_title_cms' }) }}
                {{ $store.getters.getTags({ tag: 'home_service_title_design' }) }}
                 -->

    </div>
</template>
<script>
export default {
    name: 'home-services',
    data() {
        return {
            swiperOption: {
                centeredSlides: true,
                slidesPerView: 'auto',
                spaceBetween: 40,
                loop: true,
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
                        slidesPerView: 1,
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
    computed:{
        services(){
            return [
                {
                    titulo: this.$store.getters.getTags({ tag: 'home_title2' }),
                    descripcion: this.$store.getters.getTags({tag:'home_text3'}),
                    image: '/images/home/imagenes/jumperr-studio.jpg',
                    icono: '/images/home/iconos/studio.png',
                    enlace: '/specialita/#jumperr-studio',
                },
                {
                    titulo: this.$store.getters.getTags({tag:'home_title3'}),
                    descripcion: this.$store.getters.getTags({tag:'home_text4'}),
                    image: '/images/home/imagenes/jumperr-desarrollowebyapp.jpg',
                    icono: '/images/home/iconos/desarrolloweb.png',
                    enlace: '/specialita/#jumperr-web-app',
                },
                {
                    titulo: this.$store.getters.getTags({tag:'home_title4'}),
                    descripcion: this.$store.getters.getTags({tag:'home_text5'}),
                    image: '/images/home/imagenes/jumperr-start.jpg',
                    icono: '/images/home/iconos/start.png',
                    enlace: '/specialita/#jumperr-start',
                },
                {
                    titulo: this.$store.getters.getTags({tag:'home_title5'}),
                    descripcion: this.$store.getters.getTags({tag:'home_text6'}),
                    image: '/images/home/imagenes/jumperr-redessociales.jpg',
                    icono: '/images/home/iconos/redessociales.png',
                    enlace: '/specialita/#network',
                },
                {
                    titulo: this.$store.getters.getTags({tag:'home_title6'}),
                    descripcion: this.$store.getters.getTags({tag:'home_text7'}),
                    image: '/images/home/imagenes/jumperr-cms.jpg',
                    icono: '/images/home/iconos/cmsycrm.png',
                    enlace: '/specialita/#jumperr-cms',
                },
                {
                    titulo: this.$store.getters.getTags({ tag: 'home_service_title_design' }),
                    descripcion: this.$store.getters.getTags({tag:'home_text8'}),
                    image: '/images/home/imagenes/jumperr-diseñografico.jpg',
                    icono: '/images/home/iconos/disenografico.png',
                    enlace: '/specialita/#disegno-grafico',
                }
            ]
        }
    }
}
</script>
<style scoped>
    #section_services{
        background-color: #f8f8f8;
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
        .swiper-slide{
            max-width: 320px;
        }
    }

    .swiper-pagination-fraction,
    .swiper-pagination-custom,
    .swiper-container-horizontal > .swiper-pagination-bullets{
        margin-top: 1rem;
        bottom: 0px;
        left: 0;
        width: 100%;
    }
    .swiper-pagination{
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
        border-radius: 0.5rem;
        overflow: hidden;
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
    p{
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
    .contenedor-img{
        position: relative;
    }
    .contenedor-posicionado{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 80%;
    }
    img.icono-service {
        height: 80px;
    }
    .title-img{
        color: #fff;
        margin-top: .6rem;
        font-size: 1.3rem;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
    }
</style>
