<template>
    <div>
        <section class="design">
            <div class="pr-4">
                <img class="float-left img-fluid" src="/images/especialidades/circulo-min.png" alt="Jumper circulo">
            </div>
            <div class="pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-9">
                            <h3 class="title-border-bottom">DISEÑO GRÁFICO</h3>
                            <p>
                                Crea y optimiza la identidad corporativa de tu marca y capta la atención de tus usuarios con estrategias de marketing enfocadas al concepto visual que se adapte a tu producto o servicio.
                            </p>
                            <p>
                                Obten los beneficios invirtiendo en un diseño gráfico de calidad que estimule a los consumidores y refuerce la imagen de tu marca.
                            </p>
                            <p>
                                Desde el branding hasta el diseño, desarrollo y producción de packaging para tus productos, con la identidad visual apropiada que permita reconocer a tu marca por su estilo propio.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<style scoped>
.design{
    position: relative;
    display: grid;
    grid-template-columns: 100%;
    grid-column-gap: 50px;
}
.title-border-bottom:after {
    content: ' ';
    border-bottom: 1px solid #f26336;
    display: block;
    width: 160px;
    margin: 1.3rem 0 1.1rem;
}
@media (min-width: 992px) {
    .design{
        position: relative;
        display: grid;
        grid-template-columns: 36% 1fr;
        grid-column-gap: 50px;
        height: 600px;  
    }
}
</style>
