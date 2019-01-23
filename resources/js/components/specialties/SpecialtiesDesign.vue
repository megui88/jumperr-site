<template>
    <div>
        <section class="design">
            <div class="pr-4">
                <img class="float-left img-fluid" src="/images/especialidades/circulo-min.png" alt="Jumper circulo">
            </div>
            <div class="pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-9">
                            <h3 class="title-border-bottom">{{ $store.getters.getTags({tag: 'specialties_title6'}) }}</h3>
                            {{ $store.getters.getTags({tag:'specialties_text18'}) }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'specialties-design'
    }
</script>
<style scoped>
    .design {
        position: relative;
        display: grid;
        grid-template-columns: 100%;
        grid-column-gap: 50px;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem 0 1.1rem;
    }

    @media (min-width: 992px) {
        .design {
            position: relative;
            display: grid;
            grid-template-columns: 36% 1fr;
            grid-column-gap: 50px;
            height: 600px;
        }
    }
</style>
