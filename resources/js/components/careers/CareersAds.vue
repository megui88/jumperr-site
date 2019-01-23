<template>
    <div id="section_anuncio_carreras" class="position-relative">
        <img class="img-float-1 d-md-inline-block" src="/images/iconos/nube.svg" alt="elemento jumperr">
        <img class="img-float-2 d-md-inline-block" src="/images/iconos/nube_2.svg" alt="elemento jumperr">
        <section class="wrapper">
            <aside>
                <img class="circulo-jumperr" src="/images/iconos/circulo.svg" alt="Jumperr anuncio">
                <img class="chica-jumperr" src="/images/carreras/chica-tablet-jumperr.png" alt="Jumperr anuncio">
            </aside>
            <article>
                {{ $store.getters.getTags({ tag: 'careers_text2' }) }}
            </article>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'careers-ads'
    }
</script>
<style scoped>
    .wrapper {
        background-color: #fff;
        background-image: url('/images/iconos/puntos.png');
        background-size: auto;
        background-position: bottom right;
        background-repeat: no-repeat;
        width: 100%;
        height: auto;
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: 600px auto;
    }

    aside {
        position: relative;
    }

    .circulo-jumperr {
        position: absolute;
        top: 10%;
        right: 15%;
        width: 75%;
    }

    .chica-jumperr {
        position: absolute;
        bottom: 0px;
        width: 95%;
    }

    article {
        display: grid;
        align-items: center;
    }

    article h2 {
        text-align: center;
        font-weight: 700;
        font-size: 4rem;
    }

    article h2 span {
        color: #f26336;
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
        .wrapper {
            grid-template-columns: 50% 50%;
            grid-template-rows: 600px;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .wrapper {
            grid-template-columns: 100%;
            grid-template-rows: 600px 100px;
        }

        .circulo-jumperr {
            position: absolute;
            top: auto;
            bottom: 30%;
            right: 15%;
            width: 75%;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
    }

    @media (min-width: 992px) {
        .wrapper {
            grid-template-columns: 35% 65%;
            grid-template-rows: 600px;
        }

        article h2 {
            text-align: left;
            font-weight: 700;
            font-size: 4rem;
        }
    }

    /* animaciones */
    .circulo-jumperr {
        animation: escalar 5s linear infinite;
    }

    @keyframes escalar {
        0% {
            transform: scale(1, 1);
        }
        50% {
            transform: scale(1.2, 1.2);
        }
        100% {
            transform: scale(1, 1);
        }
    }

    .img-float-1 {
        position: absolute;
        top: -50px;
        left: -45px;
        display: inline-block;
        width: 160px;
        animation: float 20s linear infinite;
    }

    @keyframes float {
        0% {
            left: -5%;
            transform: translateY(-10px);
            opacity: 1;
        }
        5% {
            left: 5%;
            transform: translateY(10px);
            opacity: 1;
        }
        10% {
            left: 10%;
            transform: translateY(-10px);
            opacity: 1;
        }
        15% {
            left: 15%;
            transform: translateY(10px);
            opacity: 1;
        }

        20% {
            left: 20%;
            transform: translateY(-10px);
            opacity: 1;
        }
        25% {
            left: 25%;
            transform: translateY(10px);
            opacity: 1;
        }
        30% {
            left: 30%;
            transform: translateY(-10px);
            opacity: 1;
        }
        35% {
            left: 35%;
            transform: translateY(10px);
            opacity: 1;
        }
        40% {
            left: 40%;
            transform: translateY(-10px);
            opacity: 1;
        }
        45% {
            left: 45%;
            transform: translateY(10px);
            opacity: 1;
        }
        50% {
            left: 50%;
            transform: translateY(-10px);
            opacity: 1;
        }
        55% {
            left: 55%;
            transform: translateY(10px);
            opacity: 1;
        }
        60% {
            left: 60%;
            transform: translateY(-10px);
            opacity: 1;
        }
        65% {
            left: 65%;
            transform: translateY(10px);
            opacity: 1;
        }
        70% {
            left: 70%;
            transform: translateY(-10px);
            opacity: 1;
        }
        75% {
            left: 75%;
            transform: translateY(10px);
            opacity: 1;
        }
        80% {
            left: 80%;
            transform: translateY(-10px);
            opacity: 1;
        }
        85% {
            left: 85%;
            transform: translateY(10px);
            opacity: 1;
        }
        90% {
            left: 90%;
            transform: translateY(-10px);
            opacity: 1;
        }
        95% {
            left: 100%;
            transform: translateY(10px);
            opacity: 1;
        }
        100% {
            left: 150%;
            transform: translateY(-10px);
            opacity: 0;
        }
    }

    .img-float-2 {
        position: absolute;
        bottom: 100px;
        left: -45px;
        display: inline-block;
        width: 160px;
        animation: floatSpeed 10s linear infinite;
    }

    @keyframes floatSpeed {
        0% {
            left: -5%;
            opacity: 1;
        }
        5% {
            left: 5%;
            opacity: 1;
        }
        10% {
            left: 10%;
            opacity: 1;
        }
        15% {
            left: 15%;
            opacity: 1;
        }

        20% {
            left: 20%;
            opacity: 1;
        }
        25% {
            left: 25%;
            opacity: 1;
        }
        30% {
            left: 30%;
            opacity: 1;
        }
        35% {
            left: 35%;
            opacity: 1;
        }
        40% {
            left: 40%;
            opacity: 1;
        }
        45% {
            left: 45%;
            opacity: 1;
        }
        50% {
            left: 50%;
            opacity: 1;
        }
        55% {
            left: 55%;
            opacity: 1;
        }
        60% {
            left: 60%;
            opacity: 1;
        }
        65% {
            left: 65%;
            opacity: 1;
        }
        70% {
            left: 70%;
            opacity: 1;
        }
        75% {
            left: 75%;
            opacity: 1;
        }
        80% {
            left: 80%;
            opacity: 1;
        }
        85% {
            left: 85%;
            opacity: 1;
        }
        90% {
            left: 90%;
            opacity: 1;
        }
        95% {
            left: 100%;
            opacity: 1;
        }
        100% {
            left: 150%;
            opacity: 0;
        }
    }
</style>

