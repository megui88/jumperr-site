<template>
    <div class="bg pt-4">
        <section class="container">
            <div class="row">
                <article class="col-12 col-md-6 d-flex">
                    <div class="align-self-center">
                        <h6 class="text-uppsercase text-theme">
                            VISIÓN
                        </h6>
                        <h3 class="title-border-bottom">
                            Jumperr eres tú, haciendo lo que siempre quisiste hacer.
                        </h3>
                        <p>
                            Queremos <strong>emocratizar el acceso al comercio electrónico</strong> y al <strong>mercado digital</strong> gracias a nuestros productos automatizados, la inteligencia digital aplicada y el trabajo constante en nombre de nuestros clientes y aliados.
                        </p>
                    </div>
                </article>
                <aside class="col-12 col-md-6 text-center text-md-left">
                    <img class="img-fluid" src="/images/la-empresa/cart.png" alt="" srcset="/images/la-empresa/cart.png">
                </aside>
            </div>
        </section>
    </div>
</template>
<style scoped>
.text-theme{
    color: #f26336;
}
h3{
    font-size: 1.6rem;
}
p{
    font-size: 1.2rem;
}
.title-border-bottom:after {
    content: ' ';
    border-bottom: 1px solid #f26336;
    display: block;
    width: 160px;
    margin: 1rem 0rem 1.1rem;
}
.bg{
    background-image: url('/images/la-empresa/teclado.jpeg');
    background-size: 430px;
    background-position: top right;
    background-repeat: no-repeat;
}
@media (max-width: 767.98px) {
    .bg{
        background-image: none;
    }
}
/* .grid-wrapper{
    max-width: 1140px;
    height: auto;
    margin: auto;
    padding-right: 15px;
    padding-left: 15px;
    display: grid;
    grid-template-columns: 100% 100%;
    grid-template-rows: 600px 600px;
} */
aside{
    min-height: 440px;
}
/* 
article{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 4rem;
} */
@media (min-width: 992px) {
    /* .grid-wrapper{
        grid-template-columns: 50% 50%;
        grid-template-rows: 600px;
    }
    aside{
    }
    article{
    } */
}
</style>
