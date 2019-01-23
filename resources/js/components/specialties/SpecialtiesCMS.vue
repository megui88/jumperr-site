<template>
    <div>
        <section class="cms bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title-border-bottom">{{ $store.getters.getTags({ tag: 'specialties_title5' }) }}</h3>
                    </div>
                    <div class="col-12 col-md-6">{{ $store.getters.getTags({ tag: 'specialties_text17' }) }}</div>
                    <div class="col-12 col-md-6">
                        <img class="img-fluid" src="/images/especialidades/jumperr_cmsycrm_especialidades.png" alt="Jumperr-cms">
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<style scoped>
    .cms{
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
    .img-fluid{
        width: 420px;
        margin-left: auto;
        display: block;
    }
</style>
