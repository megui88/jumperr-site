<template>
    <div id="presentacion-partners">
        <section class="wrapper">
            <!-- fondo -->
            <img class="img-bg-1"  src="/images/partners/fondo_foto.png" alt="Jumperr background">
            <img class="img-bg-2" src="/images/partners/fonod_foto2.png" alt="Jumperr background">
            <!-- fin del fondo -->
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

            <!-- imagenes flotando | animaciones -->
            <!-- izquierda -->
            <img class="img-float-1 d-none d-md-inline-block" src="/images/iconos/nube_2.svg" alt="elemento jumperr">
            <img class="img-float-2" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
            <img class="img-float-3  d-none d-md-inline-block" src="/images/iconos/circulowhite.svg" alt="elemento jumperr">
            <!-- derecha -->
            <img class="img-float-4  d-none d-md-inline-block" src="/images/iconos/circulogrueso.svg" alt="elemento jumperr">
            <img class="img-float-5" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
            <div class="circle-pulse"></div>
            <img class="img-float-6" src="/images/iconos/circulo-white.svg" alt="elemento jumperr">
        </section>
    </div>
</template>
<style scoped>
    .wrapper{
        width: 100%;
        min-height: 600px;
        position: relative;
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

    /* animaciones */
    .circle-pulse {
        position: absolute;
        bottom: 280px;
        right: 30px;
        display: block;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: #fff;
        cursor: pointer;
        box-shadow: 0 0 0 rgba(255,255,255, 0.4);
        animation: pulse 2s infinite;
    }
    @keyframes pulse {
        0% {
            -moz-box-shadow: 0 0 0 0 rgba(255,255,255, 0.4);
            box-shadow: 0 0 0 0 rgba(255,255,255, 0.4);
        }
        70% {
            -moz-box-shadow: 0 0 0 10px rgba(255,255,255, 0);
            box-shadow: 0 0 0 10px rgba(255,255,255, 0);
        }
        100% {
            -moz-box-shadow: 0 0 0 0 rgba(255,255,255, 0);
            box-shadow: 0 0 0 0 rgba(255,255,255, 0);
        }
    }

    .img-float-1{
        position: absolute;
        top: 100px;
        left: -45px;
        display: inline-block;
        width: 200px;
        animation: float 20s linear infinite;
    }
    .img-float-2{
        position: absolute;
        bottom: 40px;
        left: 35px;
        display: inline-block;
        width: 22px;
        animation: saltar 2s linear infinite;
    }
    .img-float-3{
        position: absolute;
        bottom: 130px;
        left: -35px;
        display: inline-block;
        width: 100px;
        height: 100px;
        animation: opacidad 5s linear infinite;
    }
    .img-float-4{
        position: absolute;
        top: 120px;
        right: -45px;
        display: inline-block;
        width: 100px;
        height: 100px;
        animation: opacidad 5s linear infinite;
    }
    .img-float-5{
        position: absolute;
        top: 240px;
        right: 25px;
        display: inline-block;
        width: 22px;
        height: 22px;
        animation: saltar 2s linear infinite;
    }
    .img-float-6{
        position: absolute;
        bottom: 175px;
        right: -25px;
        display: inline-block;
        width: 70px;
        height: 70px;
        animation: opacidad 5s linear infinite;
    }

@keyframes opacidad {
    0%{
        transform: rotate(0deg);
        opacity: 1;
    }
    50%{
        opacity: .5;
        transform: rotate(180deg);
    }
    100%{
        transform: rotate(360deg);
        opacity: 1;

    }
}

@keyframes saltar {
    0% {
		transform: translatey(0px);
	}
	50% {
		transform: translatey(-20px);
	}
	100% {
		transform: translatey(0px);
	}
}

@keyframes float {
	0% {
        left: -5%;
        /* transform: translateY(-10px); */
        opacity: 1;
	}
    5% {
        left: 5%;
        /* transform: translateY(10px); */
        opacity: 1;
	}
    10% {
        left: 10%;
        /* transform: translateY(-10px); */
        opacity: 1;
	}
    15% {
        left: 15%;
        /* transform: translateY(10px); */
        opacity: 1;
	}

    20% {
        left: 20%;
        /* transform: translateY(-10px); */
        opacity: 1;
	}
    25% {
        left: 25%;
        /* transform: translateY(10px); */
        opacity: 1;
	}
    30% {
        left: 30%;
        /* transform: translateY(-10px); */
        opacity: 1;
	}
    35% {
        left: 35%;
        /* transform: translateY(10px); */
        opacity: 1;
	}
    40% {
        left: 40%;
        /* transform: translateY(-10px); */
        opacity: 1;
	}
    45% {
        left: 45%;
        /* transform: translateY(10px); */
        opacity: 1;
	}
	50% {
        left: 50%;
        /* transform: translateY(-10px); */
        opacity: 1;
	}
    55% {
        left: 55%;
        /* transform: translateY(10px); */
        opacity: 1;
	}
    60% {
        left: 60%;
        /* transform: translateY(-10px); */
        opacity: 1;
	}
    65% {
        left: 65%;
        /* transform: translateY(10px); */
        opacity: 1;
	}
    70% {
        left: 70%;
        /* transform: translateY(-10px); */
        opacity: 1;
	}
    75% {
        left: 75%;
        /* transform: translateY(10px); */
        opacity: 1;
	}
    80% {
        left: 80%;
        /* transform: translateY(-10px); */
        opacity: 1;
    }
    85% {
        left: 85%;
        /* transform: translateY(10px); */
        opacity: 1;
    }
    90% {
        left: 90%;
        /* transform: translateY(-10px); */
        opacity: 1;
	}
    95% {
        left: 100%;
        /* transform: translateY(10px); */
        opacity: 1;
	}
	100% {
        left: 150%;
        /* transform: translateY(-10px); */
        opacity: 0;
	}
}
</style>
