<template>
    <div class="bg-white">
        <div id="servicesPartners">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center title-border-bottom">Proveemos servicios digitales  de calidad</h3>
                    </div>
                    <div class="col-12">
                        <swiper :options="swiperOption" class="p-md-4">
                            <swiper-slide v-for="(service, index) in services" :key="index">
                                <div class="cart">
                                    <div class="cart-header">
                                        <div class="image">
                                            <img :src="service.icono" :alt="service.title">
                                        </div>
                                    </div>
                                    <div class="cart-body">
                                        <div class="title">
                                            <h3 class="">{{service.title}}</h3>
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
            <img class="img-float-1 d-none d-md-inline-block" src="/images/iconos/nube_2.svg" alt="elemento jumperr">
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            services: [
                {
                    icono:  '/images/partners/001-sitemap.svg',
                    title: 'DOMINIO & HOSTING',  
                    description: `Identificación del dominio de un nuevo registro o transferencia del dominio existente, con su correspondiente web mail. El servicio de alojamiento se proporcionará a través de nuestros servidores.`
                },
                {
                    icono:  '/images/partners/002-paper.svg',
                    title: 'BOLETÍN',  
                    description: `Gestión de una lista de contactos personales con la posibilidad de enviar correo electrónico y boletines personalizados con software profesional.`
                },
                {
                    icono:  '/images/partners/009-web-site.svg',
                    title: 'ENTREVISTA',  
                    description: `Realización de una entrevista telefónica para recopilar información específica sobre tu empresa`
                },  
                {
                    icono:  '/images/partners/003-picture.svg',
                    title: 'BANNERS E IMÁGENES',  
                    description: `Creación y publicación de banners e imágenes (usando fotos del cliente o categoría de los archivos fotográficos) cargadas por el equipo editorial.`
                },  
                {
                    icono:  '/images/partners/004-global.svg',
                    title: 'RESPONSIVE',  
                    description: `Optimización de sitios web para computadoras, teléfonos inteligentes y tablets.`
                },
                {
                    icono:  '/images/partners/005-close-envelope.svg',
                    title: 'NEWSLETTER',  
                    description: `Gestion de una lista de contactos personales con la posibilidad de enviar correo electronico y newsletters personalizados por medio de un software profesional.`
                },  
                {
                    icono:  '/images/partners/006-graph.svg',
                    title: 'PANEL DE CONTROL',  
                    description: `Acceso a un panel de control para la gestión autónoma de sus textos, imágenes, videos y ofertas.`
                },  
                {
                    icono:  '/images/partners/007-pencil-edit-button.svg',
                    title: 'REDACCIÓN DE CONTENIDO',  
                    description: `Creación e inserción de contenido textual en una perspectiva SEO para una correcta optimización de su sitio web.`
                },           
                {
                    icono:  '/images/partners/008-content.svg',
                    title: 'BLOG',  
                    description: `Apertura y configuración, primer post de bienvenida, guía y manual de usuario.`
                },  
                {
                    icono:  '/images/partners/009-web-site.svg',
                    title: 'ASISTENCIA WEB',  
                    description: `Soporte y asistencia de un equipo web profesional, hasta que su sitio esté en línea y se vcumplan 7 tickets de asistencia post-publicación.`
                },
                {
                    icono:  '/images/partners/010-trello-website-logo.svg',
                    title: 'SECCIONES DEL SITIO',  
                    description: `
                    <ol>
                        <li>Página de inicio</li>
                        <li>Nosotros</li>
                        <li>Galería y Banners</li>
                        <li>Ofertas</li>
                        <li>Blog</li>
                        <li>Contactos</li>
                        <li>Comercio Electrónico / Reserva, etc</li>
                    </ol>
                    `
                },  
                {
                    icono:  '/images/partners/011-label.svg',
                    title: 'TAG',  
                    description: `
                    Sistema de asignación de etiquetas TAG:<br>
                    Palabra clave + Municipio<br>
                    Palabra clave + Provincia<br>
                    Palabra clave + Pipo<br>
                    Palabra clave + Social Ash #<br>
                    `
                },  
                {
                    icono:  '/images/partners/012-cart.svg',
                    title: 'E-COMMERCE',  
                    description: `Acceso al panel para la publicación y venta de productos o servicios.`
                },
                {
                    icono:  '/images/partners/013-smartphone.svg',
                    title: 'SOCIAL MEDIA',  
                    description: `Apertura de la FanPage de Facebook, Google+, Google MyBussiness e Instagram Plug-in automático para compartir sus noticias / promo de su sitio web.`
                },  


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
                    return `<span class="${className} swiper-pagination-bullet-x"></span>`
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
    }
}
</script>

<style scoped>
    #servicesPartners{
        -webkit-clip-path: polygon(0 4%, 100% 0, 100% 100%, 0% 100%);
        clip-path: polygon(0 4%, 100% 0, 100% 100%, 0% 100%);
        position: relative;
        background-color: #f8f8f8;
        padding-top: 80px;
    }
    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem auto 1.1rem;
    }
    .cart-header .image img{
        width: 46px;
    }
    .title h3{
        font-size: 1.4rem;
        margin-top: 1rem;
    }
    .cart-body p{
        font-size: 1.1rem;
    }

    /* animaciones */
    
</style>

