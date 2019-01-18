<template>
    <div id="teamEmpresa">
        <section class="section-team">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 m-auto">
                        <h3 class="title-border-bottom text-white">Team Jumperr</h3>
                        <swiper :options="swiperOption">
                            <swiper-slide>
                                <p class="text-white text-center">
                                    Un equipo ágil, dinámico y altamente capacitado te brinda soluciones acordes a tus ideas o negocio.
                                </p>
                            </swiper-slide>
                            <!-- <div class="swiper-button-prev" slot="button-prev"></div>
                            <div class="swiper-button-next" slot="button-next"></div> -->
                        </swiper>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<style scoped>
.section-team{
    width: auto;
    height: 500px;
    background-image: url('/images/la-empresa/imagen_compañia-min.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: grid;
    align-items: center;
    margin-bottom: -100px;
}
h3{
    font-size: 1.8rem;
    text-align: center;
}
p{
    font-size: 1.6rem;
}
.title-border-bottom:after {
    content: ' ';
    border-bottom: 1px solid #f26336;
    display: block;
    width: 160px;
    margin: 1rem auto 1.1rem;
}
</style>
