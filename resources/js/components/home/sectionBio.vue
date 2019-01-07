<template>
    <div id="section_bio">
        <article class="fondo">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-md-6 col-lg-4 align-self-center">
                        <h3 class="title-border-bottom">Te ofrecemos Soluciones Digitales</h3>
                        <p>
                            Combinamos <strong>estrategia</strong>, UX / UI, diseño web, <strong>tecnología</strong> y <strong>creatividad</strong> para ayudar a las empresas a <strong>crecer</strong> a su máximo potencial y <strong>alcanzar</strong> rápidamente nuevos niveles de éxito.
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </div>
</template>


<style scoped>
#section_bio{
    z-index: 1000;
    position: relative;
}
.fondo{
    background-color: #000;
    background-image: url('/images/home/imagenes/jumperr-teofrecemos-home.png');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    width: auto;
    height: 560px;
    min-height: 560px;
}
.title-border-bottom:after {
    content: ' ';
    border-bottom: 1px solid #f26336;
    display: block;
    width: 160px;
    margin: 1rem 0rem 1.1rem;
}
h3,p{
    color: #fff;
}
p{
    font-size: 1.2rem;
}
</style>
