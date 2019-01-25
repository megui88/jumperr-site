<template>
    <div>
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title-border-bottom text-center">{{ $store.getters.getTags({ tag: 'home_text14' }) }}</h3>
                    </div>
                </div>
            </div>
            <div class="portafolio-container">
                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img src="images/home/imagenes/portafolio/thumbnail/jumperr_fd_desktop.jpg" alt="FDGRAFIK">
                    </div>
                    <div class="portafolio-caption">
                        <a href="http://fdgrafik.com" class="p-3" target='_blank'>
                            <img src="/images/iconos/link-symbol.svg" alt="view">
                        </a>
                    </div>
                </div>

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img src="images/home/imagenes/portafolio/thumbnail/jumperr_geco_dekstop.jpg" alt="GECO">
                    </div>
                    <div class="portafolio-caption">
                        <a href="https://www.gecodigiada.com/" class="p-3" target='_blank'>
                            <img src="/images/iconos/link-symbol.svg" alt="view">
                        </a>
                    </div>
                </div>

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img src="images/home/imagenes/portafolio/thumbnail/jumperr_gmk_desktop.jpg" alt="GMK OLBIA">
                    </div>
                    <div class="portafolio-caption">
                        <a href="https://www.gmkolbia.com/" class="p-3" target='_blank'>
                            <img src="/images/iconos/link-symbol.svg" alt="view">
                        </a>
                    </div>
                </div>

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img src="images/home/imagenes/portafolio/thumbnail/jumperr_porto_desktop.jpg" alt="HOTEL PORTO RAFAEL">
                    </div>
                    <div class="portafolio-caption">
                        <a href="https://www.hotelportorafael.com/" class="p-3" target='_blank'>
                            <img src="/images/iconos/link-symbol.svg" alt="view">
                        </a>
                    </div>
                </div>

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img src="images/home/imagenes/portafolio/thumbnail/jumperr_zu_desktop.jpg" alt="Zu pietru">
                    </div>
                    <div class="portafolio-caption">
                        <a href="https://www.zupietru.com/" class="p-3" target='_blank'>
                            <img src="/images/iconos/link-symbol.svg" alt="view">
                        </a>
                    </div>
                </div>

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img src="images/home/imagenes/portafolio/thumbnail/jumperr_zu_logo.jpg" alt="Zu pietru">
                    </div>
                    <div class="portafolio-caption">
                        <a href="https://www.zupietru.com/" class="p-3" target='_blank'>
                            <img src="/images/iconos/link-symbol.svg" alt="view">
                        </a>
                    </div>
                </div>
                
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-primary text-uppercase mt-5">
                            <a>{{ $store.getters.getTags({ tag: 'general_vermas' }) }}</a>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'home-portfolio'
    }
</script>
<style scoped>
    section {
        background-color: #f8f8f8;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1rem auto 1.1rem;
    }

    .portafolio-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 10px;
    }

    @media (min-width: 682px) {
        .portafolio-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
        }
    }

    .portafolio-item {
        position: relative;
        overflow: hidden;
    }

    .portafolio-image img {
        width: 100%;
        object-fit: cover;
    }

    .portafolio-caption {
        position: absolute;
        top: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 100;
        transition: top 1s ease-out;
    }

    .portafolio-item:hover .portafolio-caption {
        top: 0;
    }

    .portafolio-caption img {
        width: 42px;
        height: auto;
    }
</style>
