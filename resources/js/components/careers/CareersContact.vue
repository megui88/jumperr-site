<template>
    <div id="section_contacto_carrera">
        <section class="contacto">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 mx-auto">
                        <h3 class="text-center text-white">{{ $store.getters.getTags({ tag: 'careers_text20' }) }}</h3>
                        <p class="lead text-center text-white">
                            {{ $store.getters.getTags({tag:'careers_text6'}) }}
                        </p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary text-uppercase">
                                {{ $store.getters.getTags({ tag: 'careers_text4' }) }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'careers-contact'
    }
</script>
<style scoped>
    .contacto {
        background-color: #fff;
        background-image: url('/images/carreras/banner-2.png');
        background-size: cover;
        background-position: top center;
        background-repeat: no-repeat;

        width: 100%;
        min-height: 700px;

        margin-bottom: -100px;
        display: grid;
        align-items: center;
    }
</style>
