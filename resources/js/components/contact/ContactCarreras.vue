<template>
    <div id="section-carreras">
        <section class="carreras">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center mt-4">Carreras Profesionales</h2>
                        <p class="lead text-center">
                            Colaboramos con diseñadores, desarrolladores y estrategas talentosos para crear un trabajo increible.
                            Buscamos personas creativas, comprometidas, con pasión dispuesta a romper y expandir limites.
                        </p>
                        <div class="text-center">
                            <router-link to="/labori" class="btn btn-primary text-uppercase">
                                Ver perfiles
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'contact-carreras',
        data() {
            return {}
        }
    }
</script>

<style scoped>
    section.carreras {
        display: grid;
        /* height: 600px; */
        width: 100%;
        align-items: center;
        background-color: #f8f8f8;
        /* background-image: url('/images/contacto/imagen2_contacto-min.jpg'); */
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        padding: 4rem 0;
    }
</style>
