<template>
    <div id="section_proceso_carreras">
        <section class="wrapper">
            <article class="mb-4">
                <h3 class="title-border-bottom text-center text-white">Proceso de reclutamiento y selección</h3>
            </article>
            <aside>
                <div class="item">
                    <img src="/images/carreras/telefono-min.png" alt="Jumperr proceso de carreras">
                    <strong class="d-block">1. Entrevista por teléfono</strong>
                </div>
                <div class="item">
                    <img src="/images/carreras/user-min.png" alt="Jumperr proceso de carreras">
                    <strong class="d-block">2. Primera Entrevista</strong>
                </div>
                <div class="item">
                    <img src="/images/carreras/tuerca-min.png" alt="Jumperr proceso de carreras">
                    <strong class="d-block">3. Prueba Técnica</strong>
                </div>
                <div class="item">
                    <img src="/images/carreras/moneda-min.png" alt="Jumperr proceso de carreras">
                    <strong class="d-block">4. Oferta Salarial</strong>
                </div>
                <div class="item">
                    <img src="/images/carreras/logocircular copy.svg" alt="Jumperr proceso de carreras">
                    <strong class="d-block">5. Bienvenido al Team Jumperr</strong>
                </div>
            </aside>
        </section>
    </div>
</template>
<style scoped>
    #section_proceso_carreras{
        background-image: url('/images/carreras/imagen_2-min.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        min-height: 600px;
        padding: 50px 0;
        display: grid;
        align-items: center;
    }
    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem auto 1.1rem;
    }
    .wrapper{
        width: 100%;
        max-width: 1140px;
        height: auto;
        min-height: 100%;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        display: grid;
        align-content: center;
    }
    aside{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
    }
    .item{
        color: #fff;
        text-align: center;
        margin-bottom: 2rem;
        width: 100%;
    }
    .item img{
        height: 100px;
        margin-bottom: 1rem;
    }
    @media (min-width: 768px) {
        aside{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
        }
        .item{
            color: #fff;
            text-align: center;
            margin-bottom: 2rem;
            width: 100%;
        }
    }
</style>
