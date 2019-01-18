<template>
    <div>
        <div class="wrapper py-5 py-md-0">
            <div class="column-row">
                <img class="img-fluid" src="/images/especialidades/Jumperr_laptop_Especialidades-min.png" alt="">
            </div>

            <div class="column-row">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-11 ml-lg-auto">
                            <h3 class="title-border-bottom">
                                Jumperr Studio
                            </h3>
                            <p class="mb-4">
                                Podrás acceder a estudios sectoriales, modelos 
                                de negocio y análisis de tus competidores, evaluando 
                                las oportunidades de crecimiento del mercado al que 
                                aspiras, impulsando tu negocio con nuestro apoyo. 
                            </p>
                            <p class="mb-4">
                                Te ofrecemos la creación de un sitio web totalmente nuevo 
                                o una revisión del actual, mejorando su contenido para 
                                permitir un mejor posicionamiento en los motores de búsqueda.
                            </p>

                            <ul>
                                <li>Consejos de los mejores profesionales de <strong>Jumperr.</strong></li>
                                <li>Estudios sectoriales.</li>
                                <li>Revenue model.</li>
                                <li>Análisis de presencia en <strong>redes sociales.</strong></li>
                                <li>Análisis de motores de búsqueda.</li>
                                <li>Nueva <strong>página web</strong> u optimización de la actual.</li>
                                <li>Draft Proposal con la propuesta de negocio.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</template>
<style scoped>
    ul{
        list-style: none;
        padding: 0;
    }
    li{
        line-height: 2;
    }
    li::before{
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: .1rem;
        content: "\F111";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        margin-right: .8rem;
        color: #f26336;
    }
    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem 0 1.1rem;
    }
    .wrapper{
        display: grid;
        grid-template-columns: 100%;
        align-items: center;
        width: 100%;
        min-height: 640px;
    }
    .column-row:nth-child(1){
        padding-left: 2rem;
    }

    @media (min-width: 768px) {
        .column-row:nth-child(1){
            order: 1;
            padding-left: 0px;
        }
        .column-row:nth-child(2){
            order: 0;
        }
        .wrapper{
            grid-template-columns: 55% 45%;
        }
    }
</style>
