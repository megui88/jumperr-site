<template>
    <div id="servicePresentation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center title-border-bottom">Proveemos servicios digitales  de calidad</h3>
                </div>
                <div class="col-12">
                    <swiper :options="swiperOption" class="p-4">
                        <swiper-slide v-for="(service, index) in services" :key="index">
                            <div class="cart">
                                <div class="cart-header">

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
    </div>
</template>
<script>
export default {
    data(){
        return {
            services: [
                {
                    icono:  '/images/partners/iconi_2.svg',
                    title: 'Proveemos servicios digitales de calidad',  
                    description: 'Através de nuestra red de técnicos y colaboradores podemos apoyar a nuestros clientes en el posicionamiento estratégico online de tu marca.'
                },
                {
                    icono:  '/images/partners/iconi_2.svg',
                    title: 'Innovación de proceso',  
                    description: 'Nuestros socios y clientes siempre pueden contar con nuestros consejos y asesoramientos garantizados por décadas de experiencia y  concentimiento.'
                },
                {
                    icono:  '/images/partners/iconi_2.svg',
                    title: 'Diseño y Desarrollo',  
                    description: 'Todos nuestros proyectos se llevan a cabo con la concepción de una relación que perdura en el tiempo, para mejorar y refinar cada proceso.'
                },
                {
                    icono:  '/images/partners/iconi_2.svg',
                    title: 'Estrategias de campañas de marketing',  
                    description: 'Prestando especial atención al mundo de las redes sociales y los motores de busquedas, apoyamos a nuestros clientes en todas las fases de lanzamiento y crecimiento.'
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
                    return `<span class="${className} swiper-pagination-bullet-x"></span>`
                }
            },
            breakpoints: {
                380: {
                slidesPerView: 1,
                spaceBetween: 30,
                slidesPerColumn: 1,

                },
                560: {
                slidesPerView: 1,
                spaceBetween: 30,
                slidesPerColumn: 1,

                },
                768: {
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
    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem auto 1.1rem;
    }
    .cart{
        width: inherit;
        height: 480px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        border-radius: .6rem;
        box-shadow: 0px 0px 15px 4px rgba(204, 204, 204, 0.312);
    }
    .cart-header{
        width: inherit;
        height: 50%;
        background-color:red;
    }
    .cart-body{
        width: inherit;
        height: 50%;
        background-color: white;
    }
</style>

