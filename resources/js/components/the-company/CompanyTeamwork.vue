<template>
    <div id="teamEmpresa">
        <section class="section-team">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 m-auto">
                        <h3 class="title-border-bottom text-white">{{ $store.getters.getTags({ tag: 'text5' }) }}</h3>

                        <p class="text-white text-center">{{ $store.getters.getTags({ tag: 'company_text7' }) }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'company-teamwork'
    }
</script>
<style scoped>
    .section-team {
        width: auto;
        height: 500px;
        background-image: url('/images/la-empresa/imagen_compañia-min.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        display: grid;
        align-items: center;
        margin-bottom: -100px;
    }

    h3 {
        font-size: 1.8rem;
        text-align: center;
    }

    p {
        font-size: 1.6rem;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1rem auto 1.1rem;
    }
</style>
