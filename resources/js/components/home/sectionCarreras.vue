<template>
    <div id="section_bio">
        <article class="fondo position-relative">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="img-position">
                        <img src="/images/home/imagenes/jumperr_carrera_home-min.png" alt="">
                    </div>
                    <div class="col-12 col-lg-5 align-self-center ml-auto mt-3 mt-lg-0">
                        <h3 class="title-border-bottom">Carreras profesionales</h3>
                        <p>
                            Colaboramos con diseñadores, desarrolladores y estrategas talentosos para crear un trabajo increíble. Buscamos personas creativas, comprometidas, con pasión dispuestas a romper y expandir límites. 
                        </p>
                        <router-link to="#" class="btn btn-primary text-uppercase mt-4">Ver Perfiles</router-link>
                    </div>
                </div>
            </div>
        </article>
    </div>
</template>


<style scoped>
img{
    width: 96%;
    height: auto;
}

.fondo{
    background-color: #f8f8f8;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    width: auto;
    height: auto;
    min-height: 700px;
}
.title-border-bottom:after {
    content: ' ';
    border-bottom: 1px solid #f26336;
    display: block;
    width: 160px;
    margin: 1rem 0rem 1.1rem;
}
p{
    font-size: 1.2rem;
}
@media (max-width: 575.98px) {
    /* sobre escribiendo estilo de bootstrap */
    .col-xl, .col-xl-auto, .col-xl-12, .col-xl-11, .col-xl-10, .col-xl-9, .col-xl-8, .col-xl-7, .col-xl-6, .col-xl-5, .col-xl-4, .col-xl-3, .col-xl-2, .col-xl-1, .col-lg, .col-lg-auto, .col-lg-12, .col-lg-11, .col-lg-10, .col-lg-9, .col-lg-8, .col-lg-7, .col-lg-6, .col-lg-5, .col-lg-4, .col-lg-3, .col-lg-2, .col-lg-1, .col-md, .col-md-auto, .col-md-12, .col-md-11, .col-md-10, .col-md-9, .col-md-8, .col-md-7, .col-md-6, .col-md-5, .col-md-4, .col-md-3, .col-md-2, .col-md-1, .col-sm, .col-sm-auto, .col-sm-12, .col-sm-11, .col-sm-10, .col-sm-9, .col-sm-8, .col-sm-7, .col-sm-6, .col-sm-5, .col-sm-4, .col-sm-3, .col-sm-2, .col-sm-1, .col, .col-auto, .col-12, .col-11, .col-10, .col-9, .col-8, .col-7, .col-6, .col-5, .col-4, .col-3, .col-2, .col-1 {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 50px;
    }
    .fondo{
        height: auto;
        min-height: auto;
    }
}
/* end */
@media (min-width: 992px) {
    img{
        width: 688px;
    }
    .img-position{
        position: absolute;
        top: -65px;
        left: 0;
    }
}
</style>
