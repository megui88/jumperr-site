<template>
    <div>
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title-border-bottom text-center">Portafolio</h3>
                    </div>
                </div>
            </div>
            <div class="portafolio-container">
                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img class="" src="images/home/imagenes/portafolio/thumbnail/jumperr_fd_desktop.jpg" alt="FDGRAFIK">
                    </div>
                    <div class="portafolio-caption">
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                    </div>
                </div>

                <!--  -->

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img class="" src="images/home/imagenes/portafolio/thumbnail/jumperr_geco_dekstop.jpg" alt="FDGRAFIK">
                    </div>
                    <div class="portafolio-caption">
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                    </div>
                </div>

                <!--  -->

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img class="" src="images/home/imagenes/portafolio/thumbnail/jumperr_gmk_desktop.jpg" alt="FDGRAFIK">
                    </div>
                    <div class="portafolio-caption">
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                    </div>
                </div>

                <!--  -->

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img class="" src="images/home/imagenes/portafolio/thumbnail/jumperr_porto_desktop.jpg" alt="FDGRAFIK">
                    </div>
                    <div class="portafolio-caption">
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                    </div>
                </div>

                <!--  -->

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img class="" src="images/home/imagenes/portafolio/thumbnail/jumperr_zu_desktop.jpg" alt="FDGRAFIK">
                    </div>
                    <div class="portafolio-caption">
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                    </div>
                </div>

                <!--  -->

                <div class="portafolio-item">
                    <div class="portafolio-image">
                        <img class="" src="images/home/imagenes/portafolio/thumbnail/jumperr_zu_logo.jpg" alt="FDGRAFIK">
                    </div>
                    <div class="portafolio-caption">
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                        <router-link to="#" class="p-3">
                            <img src="/images/home/iconos/loupe.svg" alt="view">
                        </router-link>
                    </div>
                </div>
                
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                            <router-link to="#" class="btn btn-primary text-uppercase mt-5">Ver más</router-link>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<style scoped>
section{
    background-color: #f8f8f8;
}
.title-border-bottom:after {
    content: ' ';
    border-bottom: 1px solid #f26336;
    display: block;
    width: 160px;
    margin: 1rem auto 1.1rem;
}

.portafolio-container{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 10px;
}
@media (min-width: 682px) {
    .portafolio-container{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        grid-gap: 10px;
    }
}
.portafolio-item{
    position: relative;
    overflow: hidden;
}

.portafolio-image img{
    width: 100%;
    object-fit: cover;
}
.portafolio-caption{
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
.portafolio-item:hover .portafolio-caption{
    top: 0;
}
.portafolio-caption img{
    width: 42px;
    height: auto;
}
</style>
