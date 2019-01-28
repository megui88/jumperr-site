<template>
    <div id="network">
        <section class="redes-sociales">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 ml-auto">
                        <article>
                            <h3 class="title-border-bottom text-white">{{ $store.getters.getTags({ tag: 'specialties_title4' }) }}</h3>
                            <span v-html="$store.getters.getTags({ tag: 'specialties_text16' })"></span>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'specialties-network'
    }
</script>
<style scoped>
    .redes-sociales {
        -webkit-clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 90%);
        clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 90%);
        width: 100%;
        height: 760px;
        background: rgb(255, 255, 255);
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/images/especialidades/image.jpg');
        background-size: cover;
        background-position: top left;
        margin-top: -45px;
        display: grid;
        align-items: center;
        position: relative;
        z-index: -1;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem 0 1.1rem;
    }
</style>
