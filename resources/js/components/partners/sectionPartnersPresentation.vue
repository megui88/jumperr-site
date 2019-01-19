<template>
    <div id="presentacion-partners">
        <section class="wrapper">
            <img class="img-bg-1"  src="/images/partners/fondo_foto.png" alt="Jumperr background">
            <img class="img-bg-2" src="/images/partners/fonod_foto2.png" alt="Jumperr background">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 mx-auto">
                        <h4 class="text-center title-border-bottom">Potenciamos tus ideas, <strong>aumentamos tu exito</strong>.</h4>
                        <div class="text-center">
                            <img class="img-fluid img-central" src="/images/partners/imagen2.jpg" alt="Jumperr partners">
                        </div>
                        <h3 class="text-white text-center mt-3">
                            Qué ofrecemos para hacer la cartera de clientes a nuestros socios?
                        </h3>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<style scoped>
    .wrapper{
        width: 100%;
        min-height: 600px;
        position: relative;
        z-index: -1;
        background-color: #fff;
        display: grid;
        align-items: center;
    }
    h4{
        font-size: 2rem;
    }
    .img-bg-1, .img-bg-2{
        width: 100%;
        height: 50%;
        position: absolute;
        bottom: 0;
        left: 0;
        object-fit: cover;
        object-position: top;
    }
    .img-bg-1{
        bottom: 5%;
    }
    .img-central{
        width: 360px;
        height: 250px;
        object-fit: cover;
    }
    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem auto 1.1rem;
    }

    @media (min-width: 992px) {
        .wrapper{
            width: 100%;
            min-height: 700px;
            position: relative;
            z-index: -1;
            background-color: #fff;
            display: grid;
            align-items: center;
        }
        .img-bg-1, .img-bg-2{
            width: 100%;
            height: 50%;
            position: absolute;
            bottom: 0;
            left: 0;
            object-fit: cover;
            object-position: top;
        }
        .img-bg-1{
            bottom: 5%;
        }
        .img-central{
            width: 600px;
            height: 420px;
            object-fit: cover;
        }
    }
</style>
