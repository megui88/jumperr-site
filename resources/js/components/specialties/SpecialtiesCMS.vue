<template>
    <div>
        <section class="cms bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title-border-bottom">CMS y CRM</h3>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>
                            Manejar de manera independiente el contenido y
                            el diseño de tu sitio web es posible si cuentas con
                            una interfaz que controla una o varias bases de datos
                            donde se aloja el contenido,
                            solo contando con un sistema
                            que te permite gestionarlo.
                        </p>
                        <p>
                            Un gestor de contenidos único y eficiente.
                        </p>
                        <p>
                            Venden más, ten gestores más productivos y
                            mejora notablemente la comunicación interna y
                            externa, con una atención 100% personalizada y
                            rápida a tus clientes, de forma fácil y útil.
                        </p>
                        <p>
                            <strong>
                                ¡Imagina tener la información de tus cliente condensada en un solo lugar!
                            </strong>
                        </p>
                        <p>
                            Contando con un CMS y un CRM, podrás optimizar
                            el control de las operaciones con sistemas que
                            permiten la gestión de contenidos, así como la
                            relación y administración de tus clientes eficientemente.
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <img class="img-fluid" src="/images/especialidades/jumperr_cmsycrm_especialidades.png"
                             alt="Jumperr cms">
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'specialties-cms'
    }
</script>
<style scoped>
    .cms {
        padding-top: 80px;
        padding-bottom: 50px;
        margin-top: -80px;
        position: relative;
        z-index: -10;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem 0 1.1rem;
    }

    .img-fluid {
        width: 420px;
        margin-left: auto;
        display: block;
    }
</style>
